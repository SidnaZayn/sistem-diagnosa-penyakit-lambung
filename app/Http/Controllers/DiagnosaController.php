<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiagnosaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return response()->view('main.diagnosa.index', ['row' => $user]);
    }
}