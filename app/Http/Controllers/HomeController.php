<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function dashboard()
    {
        return view("dashboard");
    }

    public function form()
    {
        return view('form');
    }

    public function halo()
    {
        return "Halo Semuanya";
    }

    public function halo_nama(String $nama)
    {
        return "Halo " . $nama;
    }
}
