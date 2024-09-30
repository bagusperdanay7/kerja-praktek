<?php

namespace App\Exports;

use App\Models\Rekap;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RekapExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = DB::select("SELECT wfms.olo_isp, COUNT(IF(wfms.order_type = 'NEW INSTALL',1,NULL))  'AKTIVASI', COUNT(IF(wfms.order_type = 'MODIFY',1,NULL)) 'MODIF', COUNT(IF(wfms.order_type = 'DISCONNECT',1,NULL)) 'DISCONNECT', COUNT(IF(wfms.order_type = 'RESUME',1,NULL)) 'RESUME', COUNT(IF(wfms.order_type = 'SUSPEND',1,NULL)) 'SUSPEND' FROM wfms GROUP BY olo_isp");
        return collect($data);
    }

    public function map($rekap): array
    {
        return [

            $rekap->olo_isp,
            $rekap->AKTIVASI,
            $rekap->MODIF,
            $rekap->DISCONNECT,
            $rekap->RESUME,
            $rekap->SUSPEND,

        ];
    }

    public function headings(): array
    {
        return [
            'OLO',
            'AKTIVASI',
            'MODIFY',
            'DISCONNECT',
            'RESUME',
            'SUSPEND'
        ];
    }
}
