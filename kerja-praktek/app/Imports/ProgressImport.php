<?php

namespace App\Imports;

use App\Models\ProgresLapangan;
use Maatwebsite\Excel\Concerns\ToModel;

class ProgressImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new ProgresLapangan([
            'tanggal' => $row[0],
            'witel' => $row[1],
            'ao' => $row[1],
            'olo' => $row[1],
            'produk' => $row[1],

        ]);
    }
}
