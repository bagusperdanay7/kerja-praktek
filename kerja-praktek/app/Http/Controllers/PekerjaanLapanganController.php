<?php

namespace App\Http\Controllers;

use App\Models\PekerjaanLapangan;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PekerjaanLapangan  $pekerjaanLapangan
     * @return \Illuminate\Http\Response
     */
    public function show(PekerjaanLapangan $pekerjaanLapangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PekerjaanLapangan  $pekerjaanLapangan
     * @return \Illuminate\Http\Response
     */
    public function edit(PekerjaanLapangan $pekerjaanLapangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PekerjaanLapangan  $pekerjaanLapangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PekerjaanLapangan $pekerjaanLapangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PekerjaanLapangan  $pekerjaanLapangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PekerjaanLapangan $pekerjaanLapangan)
    {
        //
    }
}
