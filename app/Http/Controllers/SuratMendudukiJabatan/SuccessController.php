<?php

namespace App\Http\Controllers\Suratmendudukijabatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function success(Request $request)
    {
        return view('SuratMendudukiJabatan\success');
    }
}
