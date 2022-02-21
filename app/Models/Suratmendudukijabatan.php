<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suratmendudukijabatan extends Model
{
    use SoftDeletes;

    protected $table = 'suratmendudukijabatans';
    protected $fillable = [
        'nomor_surat_pernyataan',
        'nama_penanda_tangan',
        'jabatan_penanda_tangan',
        'nama_yang_menyatakan',
        'nip',
        'pangkat',
        'golongan',
        'jabatan_yang_menyatakan',
        'nomor_sk',
        'tanggal_penulisan'
    ];
}
