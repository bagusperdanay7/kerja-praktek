<?php

namespace App\Http\Controllers;

use App\Models\PekerjaanLapangan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PekerjaanLapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pekerjaan_lapangan.index', ["title" => "Pekerjaan Lapangan", "isidata" => PekerjaanLapangan::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pekerjaan_lapangan.create', ["title" => "Tambah Data - Pekerjaan Lapangan"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PekerjaanLapangan $pekerjaanLapangan)
    {
        $pekerjaanLapangan->tanggal = $request->tanggal;
        $pekerjaanLapangan->witel = $request->witel;
        $pekerjaanLapangan->kegiatan = $request->kegiatan;
        $pekerjaanLapangan->no_ao = $request->no_ao;
        $pekerjaanLapangan->olo = $request->olo;
        $pekerjaanLapangan->lokasi = $request->lokasi;
        $pekerjaanLapangan->layanan = $request->layanan;
        $pekerjaanLapangan->bandwidth = $request->bandwidth;
        $pekerjaanLapangan->datek_gpon = $request->datek_gpon;
        $pekerjaanLapangan->datek_odp = $request->datek_odp;
        $pekerjaanLapangan->keterangan = $request->keterangan;
        $pekerjaanLapangan->save();

        return redirect()->route('pekerjaan_lapangan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(PekerjaanLapangan $pekerjaanLapangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PekerjaanLapangan $pekerjaanLapangan)
    {
        return view('pekerjaan_lapangan.edit', ["title" => "Edit Data - Pekerjaan Lapangan", "pekerjaan_lapangan" => $pekerjaanLapangan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PekerjaanLapangan $pekerjaanLapangan)
    {
        $pekerjaanLapangan->tanggal = $request->tanggal;
        $pekerjaanLapangan->witel = $request->witel;
        $pekerjaanLapangan->kegiatan = $request->kegiatan;
        $pekerjaanLapangan->no_ao = $request->no_ao;
        $pekerjaanLapangan->olo = $request->olo;
        $pekerjaanLapangan->lokasi = $request->lokasi;
        $pekerjaanLapangan->layanan = $request->layanan;
        $pekerjaanLapangan->bandwidth = $request->bandwidth;
        $pekerjaanLapangan->datek_gpon = $request->datek_gpon;
        $pekerjaanLapangan->datek_odp = $request->datek_odp;
        $pekerjaanLapangan->keterangan = $request->keterangan;
        $pekerjaanLapangan->save();

        return redirect()->route('pekerjaan_lapangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PekerjaanLapangan $pekerjaanLapangan)
    {
        $pekerjaanLapangan->delete();
        return back();
    }

    public function exportPekerjaanLapangan()
    {
        return Excel::download(new PekerjaanLapangan(), 'pekerjaan_lapangan.xlsx');
    }

    public function importPekerjaanLapangan(Request $request, PekerjaanLapangan $pekerjaanLapangan)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('pekerjaan_lapangan_temp', $namaFile);

        Excel::import(new PekerjaanLapangan(), public_path('/database_temp/' . $namaFile));

        return redirect()->route('pekerjaan_lapangan.index');
    }
}
