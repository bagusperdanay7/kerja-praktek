<?php

namespace App\Imports;

use App\Models\PekerjaanLapangan;
use Maatwebsite\Excel\Concerns\ToModel;

class PekerjaanLapanganImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new PekerjaanLapangan([
            'no' => $row[0],
            'tanggal' => $row[1],
            'witel' => $row[2],
            'kegiatan' => $row[3],
            'no_ao' => $row[4],
            'olo' => $row[5],
            'lokasi' => $row[6],
            'layanan' => $row[7],
            'bandwidth' => $row[8],
            'datek_gpon' => $row[9],
            'datek_odp' => $row[10],
            'keterangan' => $row[11]
        ]);
    }
}
