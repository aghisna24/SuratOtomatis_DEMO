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


    //Masih belum jalan 
    public function print_pdf(Request $request)
    {
    	$row = Pegawai::all();
 
    	$pdf = PDF::loadview('hasil_surat_pdf',['pegawai'=>$pegawai]);
    	return $pdf->download('hasil-surat-pengundurandiri-pdf');
    }
}
