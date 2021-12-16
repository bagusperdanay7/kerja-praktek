<?php

namespace App\Exports;

use App\Models\ProgresLapangan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProgressExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ProgresLapangan::orderBy('id')->filter(request([
            'ao', 'tanggal', 'witel', 'olo', 'produk', 'progress'
        ]))->get();
    }

    public function map($progress): array
    {
        return [
            // $progress->id,
            $progress->tanggal,
            $progress->witel,
            $progress->ao,
            $progress->olo,
            $progress->produk,
            $progress->alamat_toko,
            $progress->tanggal_order_pt1,
            $progress->keterangan_pt1,
            $progress->tanggal_order_pt2,
            $progress->keterangan_pt2,
            $progress->datek_odp,
            $progress->datek_gpon,
            $progress->progress,
            $progress->keterangan

        ];
    }

    public function headings(): array
    {
        return [
            // 'NO',
            'TANGGAL',
            'WITEL',
            'NO. AO',
            'OLO',
            'PRODUK',
            'ALAMAT',
            'TANGGAL ORDER PT1',
            'KETERANGAN PT1',
            'TANGGAL ORDER PT2',
            'KETERANGAN PT2',
            'DATEK ODP',
            'DATEK GPON',
            'PROGRESS',
            'KETERANGAN'
        ];
    }
}
