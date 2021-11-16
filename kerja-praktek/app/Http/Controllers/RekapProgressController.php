<?php

namespace App\Http\Controllers;

use App\Exports\RekapProgres;
use App\Models\ProgresLapangan;
use App\Models\RekapProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class RekapProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekap_progress = DB::select("SELECT olo, COUNT(IF(progress = 'In Progress',1,NULL))  'plan_aktivasi', COUNT(IF(progress = 'Done',1,NULL)) 'plant_modify', COUNT(IF(progress = 'Cancel',1,NULL)) 'plant_dc' FROM progres_lapangans GROUP BY olo");


        // $totalPlanModify = DB::table('rekaps')->sum('plan_modify');
        // $totalPlanDc = DB::table('rekaps')->sum('plan_dc');

        return view('rekap.progress.index', ['title' => 'Halaman Rekap Progress', 'rekap_pro' => $rekap_progress]);
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
    public function destroy(RekapProgress $rekapProgress, ProgresLapangan $progresLapangan)
    {
        //
    }

    public function exportRekapProgres(){
        return Excel::download(new RekapProgres, 'rekap_progres_lapangan.xlsx');
    }
}
