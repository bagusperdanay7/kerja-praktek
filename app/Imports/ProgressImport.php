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
            'tanggal' => $this->transformDate($row[0]),
            'witel' => $row[1],
            'ao' => $row[2],
            'olo' => $row[3],
            'produk' => $row[4],
            'alamat_toko' => $row[5],
            'tanggal_order_pt1' => $this->transformDate($row[6]),
            'keterangan_pt1' => $row[7],
            'tanggal_order_pt2' => $this->transformDate($row[8]),
            'keterangan_pt2' => $row[9],
            'datek_odp' => $row[10],
            'datek_gpon' => $row[11],
            'progress' => $row[12],
            'keterangan' => $row[13],
        ]);
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
