<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgresLapangan extends Model
{
    use HasFactory;
    protected $fillable = ['witel', 'ao', 'olo', 'produk', 'alamat_toko', 'tanggal_order_pt1', 'keterangan_pt1', 'tanggal_order_pt2', 'keterangan_pt2', 'datek_odp', 'datek_gpon', 'keterangan'];
}
