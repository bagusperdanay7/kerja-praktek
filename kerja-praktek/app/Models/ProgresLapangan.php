<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgresLapangan extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal', 'witel', 'ao', 'olo', 'produk', 'alamat_toko', 'tanggal_order_pt1', 'keterangan_pt1', 'tanggal_order_pt2', 'keterangan_pt2', 'datek_odp', 'progress', 'datek_gpon', 'keterangan'];

    public function scopeFilter($query, array $filters)
    {
        // filter no ao
        $query->when(
            $filters['ao'] ?? false,
            fn ($query, $ao) => $query->where('ao', 'like', '%' . $ao . '%')
        );

        // filter tanggal
        $query->when(
            $filters['tanggal'] ?? false,
            fn ($query, $tanggal) => $query->where('tanggal', 'like', '%' . $tanggal . '%')
        );

        // filter witel
        $query->when(
            $filters['witel'] ?? false,
            fn ($query, $witel) => $query->where('witel', 'like', '%' . $witel)
        );

        // filter olo
        $query->when(
            $filters['olo'] ?? false,
            fn ($query, $olo) => $query->where('olo', 'like', '%' . $olo . '%')
        );

        // filter produk
        $query->when(
            $filters['produk'] ?? false,
            fn ($query, $produk) => $query->where('produk', 'like', '%' . $produk . '%')
        );

        // filter progress
        $query->when(
            $filters['progress'] ?? false,
            fn ($query, $progress) => $query->where('progress', 'like', '%' . $progress . '%')
        );
    }
}
