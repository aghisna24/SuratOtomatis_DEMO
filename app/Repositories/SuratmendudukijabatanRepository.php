<?php

namespace APP\Repositories;

use APP\Models\Suratmendudukijabatan;

class SuratmendudukijabatanRepository
{
    public function getPaginate($request)
    {
        $base = new Suratmendudukijabatan;
        return $base->get();
    }

    public function create($request)
    {
        $smj = new Suratmendudukijabatan;
        $smj->nomor_surat_pernyataan = $request->nomor_surat_pernyataan;
        $smj->nama_penanda_tangan = $request->nama_penanda_tangan;
        $smj->jabatan_penanda_tangan = $request->jabatan_penanda_tangan;
        $smj->nama_yang_menyatakan = $request->nama_yang_menyatakan;
        $smj->nip = $request->nip;
        $smj->pangkat = $request->pangkat;
        $smj->golongan = $request->golongan;
        $smj->jabatan_yang_menyatakan = $request->jabatan_yang_menyatakan;
        $smj->nomor_sk = $request->nomor_sk;
        $smj->tanggal_penulisan = $request->tanggal_penulisan;
        $smj->save();
        return $smj;
    }
}
