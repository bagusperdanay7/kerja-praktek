<?php

namespace App\Http\Controllers;

use App\Models\RekapProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekapProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekap_progress = DB::select('SELECT olo, SUM(plan_aktivasi) AS plan_aktivasi FROM rekap_progress GROUP BY olo');
        $totalPlanAktivasi = DB::table('rekap_progress')->sum('plan_aktivasi');
        // $totalPlanModify = DB::table('rekaps')->sum('plan_modify');
        // $totalPlanDc = DB::table('rekaps')->sum('plan_dc');

        return view('rekap.progress.index', ['title' => 'Halaman Rekap Progress', 'rekap_pro' => $rekap_progress, 'totalPlanAktivasi' => $totalPlanAktivasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  \App\Models\RekapProgress  $rekapProgress
     * @return \Illuminate\Http\Response
     */
    public function show(RekapProgress $rekapProgress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RekapProgress  $rekapProgress
     * @return \Illuminate\Http\Response
     */
    public function edit(RekapProgress $rekapProgress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RekapProgress  $rekapProgress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RekapProgress $rekapProgress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RekapProgress  $rekapProgress
     * @return \Illuminate\Http\Response
     */
    public function destroy(RekapProgress $rekapProgress)
    {
        //
    }
}
