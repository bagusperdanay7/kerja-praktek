<?php

namespace App\Imports;

use App\Models\Rekap;
use Maatwebsite\Excel\Concerns\ToModel;

class RekapImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Rekap([
            'no' => $row[0],
            'olo' => $row[1],
            'plan_aktivasi' => $row[2],
            'plan_modify' => $row[3],
            'plan_disconnect' => $row[4],
            'aktivasi' => $row[5],
            'modify' => $row[6],
            'disconnect' => $row[7],
            'resume' => $row[8],
            'suspend' => $row[9]
        ]);
    }
}
