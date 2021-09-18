<?php

namespace App\Imports;

use App\Models\Database;
use Maatwebsite\Excel\Concerns\ToModel;


class DatabaseImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */



    public function model(array $row)
    {

        return new Database([
            'witel'=> $row[0],
            'olo_isp'=> $row[1],
            'site_kriteria'=> $row[2],
            'order_type'=> $row[3],
            'produk'=> $row[4],
            'satuan'=> $row[5],
            'status_ncx'=> $row[6]
        ]);
    }
}
