<?php

namespace App\Imports;

use App\Models\Diconnect;
use App\Models\Wfm;
use Maatwebsite\Excel\Concerns\ToModel;

use Illuminate\Support\Collection;

use Maatwebsite\Excel\Concerns\ToCollection;

class WfmImportBaru implements ToCollection
{

    public function collection(Collection  $rows)
    {
        foreach ($rows as $row) {
            $wfm = Wfm::create([

                'tgl_bulan_th' => $this->transformDate($row[0]),
                'no_ao' => $row[1],
                'witel' => $row[2],
                'olo_isp' => $row[3],
                'site_kriteria' => $row[4],
                'sid' => $row[5],
                'site_id' => $row[6],
                'order_type' => $row[7],
                'produk' => $row[8],
                'satuan' => $row[9],
                'kapasitas_bw' => $row[10],
                'longitude' => $row[11],
                'latitude' => $row[12],
                'alamat_asal' => $row[13],
                'alamat_tujuan' => $row[14],
                'status_ncx' => $row[15],
                'berita_acara' => $row[16],
                'tgl_complete' => $row[17],
                'status_wfm' => $row[18],
                'alasan_cancel' => $row[19],
                'cancel_by' => $row[20],
                'start_cancel' => $row[21],
                'ready_after_cancel' => $row[22],
                'integrasi' => $row[23],
                'metro' => $row[24],
                'ip' => $row[25],
                'port' => $row[26],
                'metro2' => $row[27],
                'ip2' => $row[28],
                'port2' => $row[29],
                'vlan' => $row[30],
                'vcid' => $row[31],
                'gpon' => $row[32],
                'ip3' => $row[33],
                'port3' => $row[34],
                'sn' => $row[35],
                'port4' => $row[36],
                'type' => $row[37],
                'nama' => $row[38],
                'ip4' => $row[39],
                'downlink' => $row[40],
                'type_switch' => $row[41],
                'capture_metro_backhaul' => "",
                'capture_metro_access' => "",
                'capture_gpon' => "",
                'capture_gpon_image' => "",
                'capture_done' => $row[42],
                'pic' => $row[43],

            ]);

            Diconnect::create([
                'wfm_id' => $wfm->id,
                'tanggal' => $wfm->tgl_bulan_th,
                'no_ao' => $wfm->no_ao,
                'witel' => $wfm->witel,
                'olo' => $wfm->olo_isp,
                'alamat' => $wfm->alamat_asal,
                'jenis_net' => "",
                'jumlah_nte' => "",
                'status' => "",
                'plan_cabut' => "",
                'pic'
            ]);
        }
    }

    public function transformDate($value, $format = 'd/m/y')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }
}
<<<<<<< HEAD
=======

    public function transformDateComplete($value, $format = 'd/m/y'){
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }

}
>>>>>>> 2ab17dd3cde28f5f689188110d06ecf27cf1bc9f
