<?php

namespace App\Http\Controllers;

use App\Exports\WfmExport;
use App\Http\Controllers\Controller;
use App\Imports\WfmImport;
use App\Imports\WfmImportBaru;
use App\Models\Database;
use App\Models\Diconnect;
use App\Models\Wfm;
use App\Models\Rekap;
use Carbon\Carbon;
use Dotenv\Store\File\Reader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Gate;

class WfmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wfm.index', [
            "title" => "WFM",
            'database' => Database::all(),
            'wfm_all' => Wfm::all(),
            'wfms' => Wfm::orderBy('id')->filter(request([
                'no_ao', 'tgl_bulan_th', 'witel', 'olo_isp', 'order_type', 'produk', 'status_ncx', 'status_wfm', 'tgl_bulan_sd'
            ]))->get()
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::any(['admin', 'editor'])) {
            return view('wfm.create', ["title" => "Tambah Data - WFM", 'database' => Database::all(), 'rekap' => Rekap::all()]);
        } else {
            abort(403);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Wfm $wfm, Rekap $rekap, Diconnect $diconnect)
    {

        $request->validate([
            'capture_gpon_image' => 'mimes:png,jpg,jpeg,PNG,JPG,JPEG'
        ]);




        if (isset($request->capture_gpon_image)) {
            $imgName = $request->capture_gpon_image->getClientOriginalName() . '-' . time() . '.' . $request->capture_gpon_image->extension();
            $request->capture_gpon_image->move(public_path('img'), $imgName);

            $wfm = Wfm::create([
                'tgl_bulan_th' => $request->tgl_bulan_th,
                'no_ao' => $request->no_ao,
                'witel' => $request->witel,
                'olo_isp' => $request->olo_isp,
                'site_kriteria' => $request->site_kriteria,
                'sid' => $request->sid,
                'site_id' => $request->site_id,
                'order_type' => $request->order_type,
                'produk' => $request->produk,
                'satuan' => $request->satuan,
                'kapasitas_bw' => $request->kapasitas_bw,
                'longitude' => $request->longitude,
                'latitude' => $request->latitude,
                'alamat_asal' => $request->alamat_asal,
                'alamat_tujuan' => $request->alamat_tujuan,
                'status_ncx' => $request->status_ncx,
                'berita_acara' => $request->berita_acara,
                'tgl_complete' => $request->tgl_complete,
                'status_wfm' => $request->status_wfm,
                'alasan_cancel' => $request->alasan_cancel,
                'cancel_by' => $request->cancel_by,
                'start_cancel' => $request->start_cancel,
                'ready_after_cancel' => $request->ready_after_cancel,
                'integrasi' => $request->integrasi,
                'metro' => $request->metro,
                'ip' => $request->ip,
                'port' => $request->port,
                'metro2' => $request->metro2,
                'ip2'  => $request->ip2,
                'port2' => $request->port2,
                'vlan' => $request->vlan,
                'vcid' => $request->vcid,
                'gpon' => $request->gpon,
                'ip3' => $request->ip3,
                'port3' => $request->port3,
                'sn' => $request->sn,
                'port4' => $request->port4,
                'type' => $request->type,
                'nama' => $request->nama,
                'ip4' => $request->ip4,
                'downlink' => $request->downlink,
                'type_switch' => $request->type_switch,
                'capture_metro_backhaul' => $request->capture_metro_backhaul,
                'capture_metro_access' => $request->capture_metro_access,
                'capture_gpon' => $request->capture_gpon,
                'capture_gpon_image' => $imgName,
                'pic' => $request->pic
            ]);




            $query1 = DB::table('wfms')->where('order_type', 'NEW INSTALL')->groupBy('olo_isp')->count();
            $query2 = DB::table('wfms')->where('order_type', 'MODIFY')->groupBy('olo_isp')->count();
            $query3 = DB::table('wfms')->where('order_type', 'DISCONNECT')->groupBy('olo_isp')->count();
            $query4 = DB::table('wfms')->where('order_type', 'RESUME')->groupBy('olo_isp')->count();
            $query5 = DB::table('wfms')->where('order_type', 'SUSPEND')->groupBy('olo_isp')->count();



            $rekap->wfm_id = $wfm->id;
            $rekap->olo_wfm = $wfm->olo_isp;
            $rekap->status_wfm = $wfm->order_type;
            // $rekap->olo_lapangan = "";
            // $rekap->status_lapangan = "";
            $rekap->save();


            if ($wfm->order_type == "DISCONNECT") {



                $diconnect->wfm_id = $wfm->id;
                $diconnect->tanggal = $wfm->tgl_bulan_th;
                $diconnect->no_ao = $wfm->no_ao;
                $diconnect->witel = $wfm->witel;
                $diconnect->olo = $wfm->olo_isp;
                $diconnect->alamat = $wfm->alamat_asal;
                $diconnect->jenis_nte = "";
                $diconnect->jumlah_nte = "";
                $diconnect->status = "";
                $diconnect->plan_cabut = $wfm->tgl_bulan_th;
                $diconnect->pic = "";
                $diconnect->save();
            }
        } else {
            $imgName = "avatar.jpg";
            $wfm = Wfm::create([
                'tgl_bulan_th' => $request->tgl_bulan_th,
                'no_ao' => $request->no_ao,
                'witel' => $request->witel,
                'olo_isp' => $request->olo_isp,
                'site_kriteria' => $request->site_kriteria,
                'sid' => $request->sid,
                'site_id' => $request->site_id,
                'order_type' => $request->order_type,
                'produk' => $request->produk,
                'satuan' => $request->satuan,
                'kapasitas_bw' => $request->kapasitas_bw,
                'longitude' => $request->longitude,
                'latitude' => $request->latitude,
                'alamat_asal' => $request->alamat_asal,
                'alamat_tujuan' => $request->alamat_tujuan,
                'status_ncx' => $request->status_ncx,
                'berita_acara' => $request->berita_acara,
                'tgl_complete' => $request->tgl_complete,
                'status_wfm' => $request->status_wfm,
                'alasan_cancel' => $request->alasan_cancel,
                'cancel_by' => $request->cancel_by,
                'start_cancel' => $request->start_cancel,
                'ready_after_cancel' => $request->ready_after_cancel,
                'integrasi' => $request->integrasi,
                'metro' => $request->metro,
                'ip' => $request->ip,
                'port' => $request->port,
                'metro2' => $request->metro2,
                'ip2'  => $request->ip2,
                'port2' => $request->port2,
                'vlan' => $request->vlan,
                'vcid' => $request->vcid,
                'gpon' => $request->gpon,
                'ip3' => $request->ip3,
                'port3' => $request->port3,
                'sn' => $request->sn,
                'port4' => $request->port4,
                'type' => $request->type,
                'nama' => $request->nama,
                'ip4' => $request->ip4,
                'downlink' => $request->downlink,
                'type_switch' => $request->type_switch,
                'capture_metro_backhaul' => $request->capture_metro_backhaul,
                'capture_metro_access' => $request->capture_metro_access,
                'capture_gpon' => $request->capture_gpon,
                'capture_gpon_image' => $imgName,
                'pic' => $request->pic
            ]);




            $query1 = DB::table('wfms')->where('order_type', 'NEW INSTALL')->groupBy('olo_isp')->count();
            $query2 = DB::table('wfms')->where('order_type', 'MODIFY')->groupBy('olo_isp')->count();
            $query3 = DB::table('wfms')->where('order_type', 'DISCONNECT')->groupBy('olo_isp')->count();
            $query4 = DB::table('wfms')->where('order_type', 'RESUME')->groupBy('olo_isp')->count();
            $query5 = DB::table('wfms')->where('order_type', 'SUSPEND')->groupBy('olo_isp')->count();



            $rekap->wfm_id = $wfm->id;
            $rekap->olo_wfm = $wfm->olo_isp;
            $rekap->status_wfm = $wfm->order_type;
            // $rekap->olo_lapangan = "";
            // $rekap->status_lapangan = "";
            $rekap->save();

            if ($wfm->order_type == "DISCONNECT") {


                $diconnect->wfm_id = $wfm->id;
                $diconnect->tanggal = $wfm->tgl_bulan_th;
                $diconnect->no_ao = $wfm->no_ao;
                $diconnect->witel = $wfm->witel;
                $diconnect->olo = $wfm->olo_isp;
                $diconnect->alamat = $wfm->alamat_asal;
                $diconnect->jenis_nte = "";
                $diconnect->jumlah_nte = "";
                $diconnect->status = "";
                $diconnect->plan_cabut = $wfm->tgl_bulan_th;
                $diconnect->pic = "";
                $diconnect->save();
            }
        }








        sleep(1);
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
    public function edit(Wfm $wfm)
    {
        if (Gate::any(['admin', 'editor'])) {
            return view('wfm.edit', ["title" => "Update Data - WFM", 'database' => Database::all(), 'wfm' => $wfm, 'rekap' => Rekap::all()]);
        } else {
            abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wfm $wfm)
    {


        $request->validate([
            'capture_gpon_image' => 'mimes:png,jpg,jpeg,PNG,JPG,JPEG'
        ]);



        $wfm->tgl_bulan_th = $request->tgl_bulan_th;
        $wfm->no_ao = $request->no_ao;
        $wfm->witel = $request->witel;
        $wfm->olo_isp = $request->olo_isp;
        $wfm->site_kriteria = $request->site_kriteria;
        $wfm->sid = $request->sid;
        $wfm->site_id = $request->site_id;
        $wfm->order_type = $request->order_type;
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
        $wfm->type_switch = $request->type_switch;
        $wfm->capture_metro_backhaul = $request->capture_metro_backhaul;
        $wfm->capture_metro_access = $request->capture_metro_access;
        $wfm->capture_gpon = $request->capture_gpon;
        $wfm->pic = $request->pic;

        if ($request->hasFile('capture_gpon_image')) {
            $imgName = $request->capture_gpon_image->getClientOriginalName() . '-' . time() . '.' . $request->capture_gpon_image->extension();
            $request->capture_gpon_image->move(public_path('img'), $imgName);
            $wfm->capture_gpon_image = $imgName;
        }

        $wfm->save();

        if ($wfm->order_type == "DISCONNECT") {
            Diconnect::create([
                'wfm_id' => $wfm->id,
                'older' => $wfm->no_ao,
                'customer' => $wfm->olo_isp,
                'lokasi' => $wfm->alamat_asal,
                'kota' => $wfm->witel,
                'jenis_ont' => "",
                'status' => "",
                'plan_cabut' => "",
                'pic' => "",
            ]);
        }


        sleep(1);
        return redirect()->route('wfm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wfm $wfm)
    {
        $wfm->delete();
        sleep(1);
        return back();
    }

    public function exportWfm()
    {
        return Excel::download(new WfmExport, 'wfm.xlsx');
    }

    public function importWfm(Request $request, Wfm $wfm)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('database_temp', $namaFile);

        Excel::import(new WfmImportBaru, public_path('/database_temp/' . $namaFile));

        return redirect()->route('wfm.index')->with('success', 'Data Berhasil diImpor!');
    }
}
