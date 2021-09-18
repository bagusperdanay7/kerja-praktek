<?php

namespace App\Imports;

use App\Models\Wfm;
use Maatwebsite\Excel\Concerns\ToModel;

class WfmImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Wfm([

            'no' =>$row[0],
            'tgl_bulan_th' =>$row[1],
            'no_ao' =>$row[2],
            'witel' =>$row[3],
            'olo_isp' =>$row[4],
            'site_kriteria' =>$row[5],
            'sid' =>$row[6],
            'site_id' =>$row[7],
            'order_type' =>$row[8],
            'produk' =>$row[9],
            'satuan' =>$row[10],
            'kapasitas_bw' =>$row[11],
            'longitude' =>$row[12],
            'latitude' =>$row[13],
            'alamat_asal' =>$row[14],
            'alamat_tujuan' =>$row[15],
            'status_ncx' =>$row[16],
            'berita_acara' =>$row[17],
            'tgl_complete' =>$row[18],
            'status_wfm' =>$row[19],
            'alasan_cancel' =>$row[20],
            'cancel_by' =>$row[21],
            'start_cancel' =>$row[22],
            'ready_after_cancel' =>$row[23],
            'integrasi' =>$row[24],
            'metro' =>$row[25],
            'ip' =>$row[26],
            'port' =>$row[27],
            'metro2' =>$row[28],
            'ip2' =>$row[29],
            'port2' =>$row[30],
            'vlan' =>$row[31],
            'vcid' =>$row[32],
            'gpon' =>$row[33],
            'ip3' =>$row[34],
            'port3' =>$row[35],
            'sn' =>$row[36],
            'port4' =>$row[37],
            'type' =>$row[38],
            'nama' =>$row[39],
            'ip4' =>$row[40],
            'downlink' =>$row[41],
            'type2' =>$row[42],
            'capture_done' =>$row[43],
            'pic' =>$row[44],

        ]);
    }
}
