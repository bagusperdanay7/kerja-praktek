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
            'tanggal' => $row[0],
            'witel' => $row[1],
            'kegiatan' => $row[2],
            'no_ao' => $row[3],
            'olo' => $row[4],
            'lokasi' => $row[5],
            'layanan' => $row[6],
            'bandwidth' => $row[7],
            'datek_gpon' => $row[8],
            'datek_odp' => $row[9],
            'keterangan' => $row[10]
        ]);
    }
}
