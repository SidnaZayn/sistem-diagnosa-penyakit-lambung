<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('main.diagnosa.keluhan');
    }

    public function createGejala(Request $request) {
        
    }
}
