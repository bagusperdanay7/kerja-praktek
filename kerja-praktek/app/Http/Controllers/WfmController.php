<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Database;
use App\Models\Wfm;
use Illuminate\Http\Request;

class WfmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('wfm.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('wfm.create',['database' => Database::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Wfm $wfm)
    {

            $wfm->no = $request->no;
            $wfm->tgl_bulan_th = $request->tgl_bulan_th;
            $wfm->no_ao = $request->no_ao;
            $wfm->witel = $request->witel;
            $wfm->olo_isp = $request->olo_isp;
            $wfm->site_kriteria = $request->site_kriteria;
            $wfm->sid = $request->sid;
            $wfm->site_id = $request->site_id;
            $wfm->order_type= $request->order_type;
            $wfm->produk = $request->produk;
            $wfm->satuan = $request->satuan;
            $wfm->kapasitas_bw = $request->kapasitas_bw;
            $wfm->longitude = $request->longitude;
            $wfm->latitude = $request->latitude;
            $wfm->alamat_asal = $request->alamat_asal;
            $wfm->alamat_tujuan = $request->alamat_tujuan;
            $wfm->status_ncx = $request->status_ncx;
            $wfm->berita_acara = $request->berita_acara;
            $wfm->tgl_complete = $request->tgl_complete;
            $wfm->status_wfm = $request->status_wfm;
            $wfm->alasan_cancel = $request->alasan_cancel;
            $wfm->cancel_by = $request->cancel_by;
            $wfm->start_cancel = $request->start_cancel;
            $wfm->ready_after_cancel = $request->ready_after_cancel;
            $wfm->integrasi = $request->integrasi;
            $wfm->metro = $request->metro;
            $wfm->ip = $request->ip;
            $wfm->port = $request->port;
            $wfm->metro2 = $request->metro2;
            $wfm->ip2  = $request->ip2;
            $wfm->port2 = $request->port2;
            $wfm->vlan = $request->vlan;
            $wfm->vcid = $request->vcid;
            $wfm->gpon = $request->gpon;
            $wfm->ip3 = $request->ip3;
            $wfm->port3 = $request->port3;
            $wfm->sn = $request->sn;
            $wfm->port4 = $request->port4;
            $wfm->type = $request->type;
            $wfm->nama = $request->nama;
            $wfm->ip4 = $request->ip4;
            $wfm->downlink = $request->downlink;
            $wfm->type2 = $request->type2;
            $wfm->capture_done = $request->capture_done;
            $wfm->pic = $request->pic;
            $wfm->save();
            return redirect()->route('wfm.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
