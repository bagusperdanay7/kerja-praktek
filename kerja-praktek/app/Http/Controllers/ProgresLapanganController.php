<?php

namespace App\Http\Controllers;

use App\Models\Database;
use App\Models\ProgresLapangan;
use App\Models\Rekap;
use App\Models\RekapProgress;
use App\Models\Wfm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ProgresLapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('progress_lapangan.index', [
            "title" => "Progress Lapangan",
            'database' => Database::all(),
            'progress_all' => ProgresLapangan::all(),
            'pro_lap' => ProgresLapangan::orderBy('id')->filter(request([
                'ao', 'tanggal', 'witel', 'olo', 'produk', 'progress'
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
            return view('progress_lapangan.new', ['title' => 'Tambah Data - Progress Lapangan', 'database' => Database::all(), 'wfm' => Wfm::all()]);
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
    public function store(Request $request, ProgresLapangan $progress, RekapProgress $rekapPro)
    {
        $progress->tanggal = $request->tanggal;
        $progress->witel = $request->witel;
        $progress->ao = $request->ao;
        $progress->olo = $request->olo;
        $progress->produk = $request->produk;
        $progress->alamat_toko = $request->alamat_toko;
        $progress->tanggal_order_pt1 = $request->tanggal_order_pt1;
        $progress->keterangan_pt1 = $request->keterangan_pt1;
        $progress->tanggal_order_pt2 = $request->tanggal_order_pt2;
        $progress->keterangan_pt2 = $request->keterangan_pt2;
        $progress->datek_odp = $request->datek_odp;
        $progress->progress = $request->progress;
        $progress->datek_gpon = $request->datek_gpon;
        $progress->keterangan = $request->keterangan;
        $progress->save();

        // Query Database
        $queryInProgress = DB::table('progres_lapangans')->where('progress', 'In Progress')->groupBy('olo')->count();
        // $queryModify = DB::table('wfms')->where('progress', 'MODIFY')->groupBy('olo_isp')->count();
        // $query3Disconnect = DB::table('wfms')->where('order_type', 'DISCONNECT')->groupBy('olo_isp')->count();

        if ($progress->progress == "In Progress") {

            $rekapPro->progres_id = $progress->id;
            $rekapPro->olo = $progress->olo;
            $rekapPro->plan_aktivasi = $queryInProgress;
            // $rekapPro->plan_modify = 0;
            // $rekapPro->plan_dc = 0;
            $rekapPro->save();
        }


        sleep(1);
        return redirect()->route('progress.index');
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
    public function edit(ProgresLapangan $progress)
    {
        if (Gate::any(['admin', 'editor'])) {
            return view('progress_lapangan.update', ['title' => 'Update Data - Progress Lapangan', 'progress' => $progress, 'database' => Database::all(), 'wfm' => Wfm::all()]);
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
    public function update(Request $request, ProgresLapangan $progress)
    {
        $progress->tanggal = $request->tanggal;
        $progress->witel = $request->witel;
        $progress->ao = $request->ao;
        $progress->olo = $request->olo;
        $progress->produk = $request->produk;
        $progress->alamat_toko = $request->alamat_toko;
        $progress->tanggal_order_pt1 = $request->tanggal_order_pt1;
        $progress->keterangan_pt1 = $request->keterangan_pt1;
        $progress->tanggal_order_pt2 = $request->tanggal_order_pt2;
        $progress->keterangan_pt2 = $request->keterangan_pt2;
        $progress->datek_odp = $request->datek_odp;
        $progress->progress = $request->progress;
        $progress->datek_gpon = $request->datek_gpon;
        $progress->keterangan = $request->keterangan;
        $progress->save();
        sleep(1);
        return redirect()->route('progress.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgresLapangan $progress)
    {
        $progress->delete();
        sleep(1);
        return back();
    }
}
