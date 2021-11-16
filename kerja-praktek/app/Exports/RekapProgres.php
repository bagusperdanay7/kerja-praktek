<?php

namespace App\Exports;

use App\Models\ProgresLapangan;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RekapProgres implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $rekap_progress = DB::select("SELECT olo, COUNT(IF(progress = 'In Progress',1,NULL))  'plan_aktivasi', COUNT(IF(progress = 'Done',1,NULL)) 'plant_modify', COUNT(IF(progress = 'Cancel',1,NULL)) 'plant_dc' FROM progres_lapangans GROUP BY olo");
        return collect($rekap_progress);
    }

    public function map($rekapProgress): array
    {
        return [

            $rekapProgress->olo,
            $rekapProgress->plan_aktivasi,
            $rekapProgress->plant_modify,
            $rekapProgress->plant_dc,

        ];
    }

    public function headings(): array
    {
        return [
            'OLO',
            'PLAN AKTIVASI',
            'PLAN MODIFY',
            'PLAN DISCONNECT'
        ];
    }
}
