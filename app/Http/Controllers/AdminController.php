<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $data = Guest::latest()->get();
        return view('dashboard')->with('data', $data);
    }

    public function login()
    {
        $user = Auth::user();
        if($user){
            if($user->level == 'admin'){
                return redirect()->intended('dashboard/admin');
            }
        }
        return view('components.login', ['ht' => 'Login']); 
    }

    public function proses_login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('username', 'password');

        if(Auth::attempt($credential)){
            $user = Auth::user();
            if($user->level == 'admin'){
                return redirect()->intended('dashboard/admin');
            }
            return redirect()->to('/');
        }
        return redirect('login')->withInput()->withErrors(['login_gagal' => 'These credential does not match our record']);
    }

    public function register()
    {
        return view('components.register', ['ht' => 'Register']); 
    }

    public function proses_register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required'
        ],[
            'name.required' => 'Nama tidak boleh kosong',
            'username.required' => 'Username tidak boleh kosong',
            'username.unique' => 'Username telah digunakan',
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email telah digunakan',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        if($validator->fails()){
            return redirect('register')->withErrors($validator)->withInput();
        }

        $request['level'] = 'admin';
        $request['password'] = Hash::make($request->password);

        User::create($request->all());

        return redirect()->route('login');
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }
}
