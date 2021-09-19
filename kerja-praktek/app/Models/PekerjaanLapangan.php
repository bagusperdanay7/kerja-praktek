<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PekerjaanLapangan extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal', 'witel', 'kegiatan', 'no_ao', 'olo', 'lokasi', 'layanan', 'bandwidth', 'datek_gpon', 'datek_odp', 'keterangan'];
}
