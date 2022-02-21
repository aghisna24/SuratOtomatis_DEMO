<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuksesController extends Controller
{
    public function sukses(Request $request)
    {
        return view('sukses');
    }
}
