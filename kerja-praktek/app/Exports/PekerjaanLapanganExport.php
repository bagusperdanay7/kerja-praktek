<?php

namespace App\Exports;

use App\Models\PekerjaanLapangan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PekerjaanLapanganExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return PekerjaanLapangan::all();
    }

    public function map($pekerjaanLapangan): array
    {
        return [
            $pekerjaanLapangan->no,
            $pekerjaanLapangan->tanggal,
            $pekerjaanLapangan->witel,
            $pekerjaanLapangan->kegiatan,
            $pekerjaanLapangan->no_ao,
            $pekerjaanLapangan->olo,
            $pekerjaanLapangan->lokasi,
            $pekerjaanLapangan->layanan,
            $pekerjaanLapangan->bandwidth,
            $pekerjaanLapangan->datek_gpon,
            $pekerjaanLapangan->datek_odp,
            $pekerjaanLapangan->keterangan
        ];
    }

    public function headings(): array
    {
        return [
            'NO',
            'TANGGAL',
            'WITEL',
            'KEGIATAN',
            'NO AO',
            'OLO',
            'LOKASI',
            'LAYANAN',
            'BANDWIDTH',
            'DATEK GPON',
            'DATEK ODP',
            'KETERANGAN'
        ];
    }
}
