<?php

namespace App\Exports;

use App\Models\Database;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class DatabaseExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Database::all();
    }

    public function map($database): array
    {
        return [
            $database->id,
            $database->witel,
            $database->olo_isp,
            $database->site_kriteria,
            $database->order_type,
            $database->produk,
            $database->satuan,
            $database->status_ncx,

        ];
    }

    public function headings(): array
    {
        return [
            'NO',
            'WITEL',
            'OLO / ISP',
            'SITE KRITERIA',
            'ORDER TYPE',
            'PRODUK',
            'SATUAN',
            'STATUS NCX'
        ];
    }

}
