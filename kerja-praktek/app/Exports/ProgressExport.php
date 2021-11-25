<?php

namespace App\Exports;

use App\Models\ProgresLapangan;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProgressExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ProgresLapangan::all();
    }
}
