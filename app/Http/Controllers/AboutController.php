<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return "Nama : Oktavian Vandi Tri Shakti <br> Nim : 2041720208 <br> Kelas : 2C";
    }
}