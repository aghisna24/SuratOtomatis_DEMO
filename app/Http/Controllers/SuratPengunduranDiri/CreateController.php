<?php

namespace App\Http\Controllers\Suratpengundurandiri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\SuratpengundurandiriRepository;

class CreateController extends Controller
{
    protected $_spd;
    public function _construct(SuratpengundurandiriRepository $spd)
    {
        $this->_spd = $spd;
    }

    public function index(Request $request)
    {
        $this->_spd->created($request);

        $request->session()->flash('status','Berhasil Menambahkan Data');
        return redirect(route('ss');
    }
}