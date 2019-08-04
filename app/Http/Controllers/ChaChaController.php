<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChaChaController extends Controller
{
    public function index()
    {
        return view('ChaCha.index');
    }
}
