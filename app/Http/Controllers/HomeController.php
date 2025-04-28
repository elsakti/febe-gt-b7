<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function dashboard()
    {
        return view("dashboard", [
            'items' => Item::all()
        ]);
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
