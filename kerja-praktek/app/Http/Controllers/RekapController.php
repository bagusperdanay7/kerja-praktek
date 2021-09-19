<?php

namespace App\Http\Controllers;

use App\Models\Database;
use App\Exports\RekapExport;
use App\Http\Controllers\Controller;
use App\Models\Rekap;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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

        return view('rekap.index', ["title" => "Rekap", 'rekap' => Rekap::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekap.create', ["title" => "Rekap",'database' => Database::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Rekap $rekap)
    {
        $rekap->no = $request->no;
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

        return view('rekap.edit', ['rekap' => $rekap]);
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

        $rekap->no = $request->no;
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
        return back();
    }

    public function exportRekap()
    {
        return Excel::download(new RekapExport, 'rekap.xlsx');
    }
}
