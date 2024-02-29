<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = Guest::latest()->get();
        return view('dashboard')->with('data', $data);
    }
}
