<?php

namespace App\Exports;

use App\Models\Rekap;
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
        return Rekap::all();
    }

    public function map($rekap): array
    {
        return [

            $rekap->no,
            $rekap->olo,
            $rekap->plan_aktivasi,
            $rekap->plan_modify,
            $rekap->plan_disconnect,
            $rekap->aktivasi,
            $rekap->modify,
            $rekap->disconnect,
            $rekap->resume,
            $rekap->suspend,

        ];
    }

    public function headings(): array
    {
        return [
            'NO',
            'OLO',
            'PLAN AKTIVASI',
            'PLAN MODIFY',
            'PLAN DISCONNECT',
            'AKTIVASI',
            'MODIFY',
            'DISCONNECT',
            'RESUME',
            'SUSPEND'
        ];
    }
}
