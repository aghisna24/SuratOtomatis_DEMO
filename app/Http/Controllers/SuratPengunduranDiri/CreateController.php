<?php

namespace App\Http\Controllers\Suratpengundurandiri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\SuratpengundurandiriRepository;
use Exception;

class CreateController extends Controller
{
    protected $_spd;
    public function _construct(SuratpengundurandiriRepository $spd)
    {
        $this->_spd = $spd;
    }

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
    public function dummy(){
       return view('SuratPengunduranDiri\result_letter');

       // $letter = DB::table('suratpengundurandiris')->latest();
        //return view('SuratPengunduranDiri\result_letter', ['suratpengundurandiris' => $letter]);  
    }

    public function letter(){
        $pdf = \PDF::loadview('SuratPengunduranDiri\result_letter');
        return $pdf->download('letter.pdf');}
}
