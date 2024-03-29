<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        return view('index', ['ht' => 'Home']);
    }

    public function show_in(){
        return view('register', ['ht' => 'Register']);
    }

    public function store(Request $request){
        $request->validate([
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'email' => 'required|email:dns',
            'telepon' => 'required',
            'keperluan' => 'required'
        ],[
            'nama_lengkap.required' => 'Nama tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'telepon.required' => 'Tidak boleh kosong',
            'keperluan.required' => 'Tidak boleh kosong'
        ]);

        $data = [
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'keperluan' => $request->keperluan
        ];

        Guest::create($data);
        return redirect('/');
    }

    public function show_out(){
        $data = Guest::latest()->get();
        return view('checkout', ['ht' => 'Check Out'])->with('data', $data);
    }

    public function destroy(String $id){
        Guest::where('nama_lengkap', $id)->delete();
        return redirect('/');
    }
}
