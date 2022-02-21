<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suratpengundurandiri extends Model
{
    use SoftDeletes;

    protected $table = 'suratpengundurandiris';
    protected $fillable = [
        'nama_lengkap',
        'nama_perusahaan',
        'jabatan',
        'tanggal_pengunduran',
        'penerima_surat',
        'tempat_penerbit',
        'waltu_terbitan'
    ];
}
