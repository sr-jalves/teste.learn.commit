<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function formulario()
    {
        return view('formulario');
    }
}
