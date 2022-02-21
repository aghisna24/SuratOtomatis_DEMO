<?php

namespace App\Http\Controllers\Suratpengundurandiri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuksesController extends Controller
{
    public function sukses(Request $request)
    {
        return view('SuratPengunduranDiri\sukses');
    }
}
