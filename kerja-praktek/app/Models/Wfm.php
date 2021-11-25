<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wfm extends Model
{
    use HasFactory;
    protected $fillable = [
        'tgl_bulan_th',
        'no_ao',
        'witel',
        'olo_isp',
        'site_kriteria',
        'sid',
        'site_id',
        'order_type',
        'produk',
        'satuan',
        'kapasitas_bw',
        'longitude',
        'latitude',
        'alamat_asal',
        'alamat_tujuan',
        'status_ncx',
        'berita_acara',
        'tgl_complete',
        'status_wfm',
        'alasan_cancel',
        'cancel_by',
        'start_cancel',
        'ready_after_cancel',
        'integrasi',
        'metro',
        'ip',
        'port',
        'metro2',
        'ip2',
        'port2',
        'vlan',
        'vcid',
        'gpon',
        'ip3',
        'port3',
        'sn',
        'port4',
        'type',
        'capture_metro_backhaul',
        'capture_metro_access',
        'capture_gpon',
        'pic'
    ];

    public function diconnect()
    {
        return $this->hasOne(Diconnect::class);
    }

    // filter
    public function scopeFilter($query, array $filters)
    {
        // filter no ao
        $query->when(
            $filters['no_ao'] ?? false,
            fn ($query, $no_ao) => $query->where('no_ao', 'like', '%' . $no_ao . '%')
        );

        // filter tanggal
        $query->when(
            $filters['tgl_bulan_th'] ?? false,
            fn ($query, $tgl_bulan_th) =>  $query->where('tgl_bulan_th', $tgl_bulan_th)
        );

        $query->when(
            $filters['tgl_bulan_sd'] ?? false,
            fn ($query, $tgl_bulan_sd) =>  $query->where('tgl_bulan_th', $tgl_bulan_sd)
        );

        // filter olo
        $query->when(
            $filters['olo_isp'] ?? false,
            fn ($query, $olo_isp) => $query->where('olo_isp', 'like', '%' . $olo_isp . '%')
        );

        // filter witel
        $query->when(
            $filters['witel'] ?? false,
            fn ($query, $witel) => $query->where('witel', 'like', '%' . $witel)
        );

        // filter order_type
        $query->when(
            $filters['order_type'] ?? false,
            fn ($query, $order_type) => $query->where('order_type', 'like', '%' . $order_type . '%')
        );

        // filter produk
        $query->when(
            $filters['produk'] ?? false,
            fn ($query, $produk) => $query->where('produk', 'like', '%' . $produk . '%')
        );

        // filter status_ncx
        $query->when(
            $filters['status_ncx'] ?? false,
            fn ($query, $status_ncx) => $query->where('status_ncx', 'like', '%' . $status_ncx . '%')
        );

        // filter status_wfm
        $query->when(
            $filters['status_wfm'] ?? false,
            fn ($query, $status_wfm) => $query->where('status_wfm', 'like', '%' . $status_wfm . '%')
        );
    }
}
