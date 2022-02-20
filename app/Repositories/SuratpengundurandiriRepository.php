<?php
namespace APP\Repositories;
use APP\Models\Suratpengundurandiri;

class SuratpengundurandiriRepository
{
    public function getPaginate($request)
    {
        $base = new Suratpengundurandiri;
        return $base->get();
    }

    public function created($request)
    {
        $spd = new Suratpengundurandiri;
        $spd->nama_lengkap = $request->nama_lengkap;
        $spd->nama_perusahaan = $request->nama_perusahaan;
        $spd->jabatan = $request->jabatan;
        $spd->tanggal_pengunduran = $request->tanggal_pengunduran;
        $spd->penerima_surat = $request->penerima_surat;
        $spd->tempat_penerbit = $request->tempat_penerbit;
        $spd->waltu_terbitan = $request->waltu_terbitan;
        $spd->save();
        return $spd;
    }
}