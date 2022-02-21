<?php

namespace App\Http\Controllers\Suratmendudukijabatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\SuratmendudukijabatanRepository;
use Exception;

class CreateController extends Controller
{
    protected $_smj;
    public function _construct(SuratmendudukijabatanRepository $smj)
    {
        $this->_smj = $smj;
    }

    public function index1(Request $request)
    {
        return view('SuratMendudukiJabatan\message');
    }

    public function submit1(Request $request)
    {
        try {
            \App\Models\Suratmendudukijabatan::create($request->all());
        } catch (Exception $exception) {
            return redirect('message')->with(['error' => 'Data Gagal Dimasukan']);
        }
        return redirect('success');
    }
}
