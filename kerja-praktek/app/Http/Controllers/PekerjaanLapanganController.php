<?php

namespace App\Http\Controllers;

use App\Exports\PekerjaanLapanganExport;
use App\Imports\PekerjaanLapanganImport;
use App\Models\Database;
use App\Models\PekerjaanLapangan;
use App\Models\Wfm;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Gate;

class PekerjaanLapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pekerjaan_lapangan.index', ["title" => "Pekerjaan Lapangan", "isidata" => PekerjaanLapangan::all(), "database" => Database::all(), "wfm" => Wfm::all()]);
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
        $pekerjaanLapangan->no = $request->no;
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

        sleep(1);
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
        if (Gate::any(['admin', 'editor'])) {
            return view('pekerjaan_lapangan.edit', ["title" => "Update Data - Pekerjaan Lapangan", "pekerjaan_lapangan" => $pekerjaanLapangan, "database" => Database::all(), "wfm" => Wfm::all()]);
        } else {
            abort(403);
        }
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
        $pekerjaanLapangan->no = $request->no;
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
        sleep(1);
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
        sleep(1);
        return back();
    }

    public function exportPekerjaanLapangan()
    {
        return Excel::download(new PekerjaanLapanganExport, 'pekerjaan_lapangan.xlsx');
    }

    public function importPekerjaanLapangan(Request $request, PekerjaanLapangan $pekerjaanLapangan)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('database_temp', $namaFile);

        Excel::import(new PekerjaanLapanganImport, public_path('/database_temp/' . $namaFile));

        return redirect()->route('pekerjaan_lapangan.index');
    }
}
