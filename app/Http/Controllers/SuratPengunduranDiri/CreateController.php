<?php

namespace App\Http\Controllers\Suratpengundurandiri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{

    public function index(Request $request)
    {
        return view('SuratPengunduranDiri\pesan');
    }

    public function submit(Request $request)
    {
        try {
            \App\Models\Suratpengundurandiri::create($request->all());
        } catch (Exception $exception) {
            return redirect('pesan')->with(['error' => 'Data Gagal Dimasukan']);
        }
        return redirect('sukses');
    }

    //Read
    // public function dummy()
    // {
    //     // return view('SuratPengunduranDiri\result_letter');
    //     $data_SPD = \App\Models\Suratpengundurandiri::all();
    //     return view('calon.pendaftaran', ['data_spd' => $data_SPD]);


    //     // $letter = \App\Models\Suratpengundurandiri::latest();
    //     // return view('SuratPengunduranDiri\result_letter', ['suratpengundurandiris' => $letter]);
    // }

    public function letter()
    {
        $id = 1;
        $data_SPD = \App\Models\Suratpengundurandiri::orderBy('id', 'desc')->limit($id)->get();
        $pdf = \PDF::loadview('SuratPengunduranDiri\result_letter', ['data_spd' => $data_SPD]);
        return $pdf->stream('letter.pdf');
    }
}
