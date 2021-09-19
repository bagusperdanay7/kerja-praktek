<?php

namespace App\Exports;

use App\Models\PekerjaanLapangan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PekerjaanLapanganExport implements FromCollection
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
