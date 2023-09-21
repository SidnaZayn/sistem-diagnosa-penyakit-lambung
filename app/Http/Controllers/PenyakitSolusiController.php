<?php

namespace App\Http\Controllers;

use App\Models\PenyakitSolusi;
use Illuminate\Http\Request;

class PenyakitSolusiController extends Controller
{
    function index() {
        $penyakit_solusi = PenyakitSolusi::all();
        return view('main.info-penyakit.index',['penyakit_solusi'=>$penyakit_solusi]);
    }
}
