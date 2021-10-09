<?php

namespace App\Http\Controllers;

use App\Models\Database;
use App\Exports\RekapExport;
use App\Imports\RekapImport;
use App\Http\Controllers\Controller;
use App\Models\Rekap;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

use function Psy\bin;

class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekap_akhir = DB::select('SELECT olo,SUM(aktivasi) AS aktivasi,SUM(rekaps.modify) AS modif,SUM(disconnect) AS disconnect, SUM(resume) AS resum, SUM(suspend) AS suspen FROM rekaps GROUP BY olo');
        $totalAktivasi = DB::table('rekaps')->sum('aktivasi');
        $totalModify = DB::table('rekaps')->sum('modify');
        $totalDc = DB::table('rekaps')->sum('disconnect');
        $totalResume = DB::table('rekaps')->sum('resume');
        $totalSuspend = DB::table('rekaps')->sum('suspend');
        // $totalPlanAktivasi = DB::table('rekaps')->sum('plan_aktivasi');
        // $totalPlanModify = DB::table('rekaps')->sum('plan_modify');
        // $totalPlanDc = DB::table('rekaps')->sum('plan_dc');

        return view('rekap.index', ['title' => 'Halaman Rekap', 'rekap' => $rekap_akhir, 'total' => $totalAktivasi, 'totalModify' => $totalModify, 'totalDc' => $totalDc, 'totalResume' => $totalResume, 'totalSuspend' => $totalSuspend]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::any(['admin', 'editor'])) {
            return view('rekap.create', ["title" => "Tambah Data - Rekap", 'database' => Database::all()]);
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
    public function store(Request $request, Rekap $rekap)
    {
        // $rekap->no = $request->no;
        $rekap->olo = $request->olo;
        $rekap->plan_aktivasi = $request->plan_aktivasi;
        $rekap->plan_modify = $request->plan_modify;
        $rekap->plan_disconnect = $request->plan_disconnect;
        $rekap->aktivasi = $request->aktivasi;
        $rekap->modify = $request->modify;
        $rekap->disconnect = $request->disconnect;
        $rekap->resume = $request->resume;
        $rekap->suspend = $request->suspend;
        $rekap->save();
        sleep(1);
        return redirect()->route('rekap.index');
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
    public function edit(Rekap $rekap)
    {
        if (Gate::any(['admin', 'editor'])) {
            return view('rekap.edit', ["rekap" => $rekap, "title" => "Update Data - Rekap"]);
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
    public function update(Request $request, Rekap $rekap)
    {

        // $rekap->no = $request->no;
        $rekap->olo = $request->olo;
        $rekap->plan_aktivasi = $request->plan_aktivasi;
        $rekap->plan_modify = $request->plan_modify;
        $rekap->plan_disconnect = $request->plan_disconnect;
        $rekap->aktivasi = $request->aktivasi;
        $rekap->modify = $request->modify;
        $rekap->disconnect = $request->disconnect;
        $rekap->resume = $request->resume;
        $rekap->suspend = $request->suspend;
        $rekap->save();
        sleep(1);
        return redirect()->route('rekap.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rekap $rekap)
    {

        $rekap->delete();
        sleep(1);
        return back();
    }

    public function exportRekap()
    {
        return Excel::download(new RekapExport, 'rekap.xlsx');
    }
    public function importRekap(Request $request, Rekap $rekap)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('database_temp', $namaFile);

        Excel::import(new RekapImport, public_path('/database_temp/' . $namaFile));

        return redirect()->route('rekap.index');
    }
}
