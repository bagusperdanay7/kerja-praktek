<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Database;
use App\Models\Deployment;
use App\Models\Rekap;
use Illuminate\Http\Request;

class DeploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('deployment.index', ['title' => 'Deployment', 'deps' => Deployment::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deployment.create', ['title' => 'Tambah Data - Deployment', 'rekaps' => Rekap::all(), 'db' => Database::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Deployment $deployment)
    {

        $deployment->rekap_id = $request->rekap_id;
        $deployment->ao = $request->ao;
        $deployment->tanggal = $request->tanggal;
        $deployment->olo = $request->olo;
        $deployment->witel = $request->witel;
        $deployment->produk = $request->produk;
        $deployment->status_ncx = $request->status_ncx;
        $deployment->status_wfm = $request->status_wfm;
        $deployment->save();
        sleep(1);
        return redirect()->route('dep.index');
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
    public function edit(Deployment $deployment)
    {
        return view('deployment.edit', ['title' => 'Update Data - Deployment', 'dep' => $deployment, 'db' => Database::all(), 'rekaps' => Rekap::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deployment $deployment)
    {
        $deployment->rekap_id = $request->rekap_id;
        $deployment->ao = $request->ao;
        $deployment->tanggal = $request->tanggal;
        $deployment->olo = $request->olo;
        $deployment->witel = $request->witel;
        $deployment->produk = $request->produk;
        $deployment->status_ncx = $request->status_ncx;
        $deployment->status_wfm = $request->status_wfm;
        $deployment->save();
        sleep(1);
        return redirect()->route('dep.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deployment $deployment)
    {
        $deployment->delete();
        sleep(1);
        return back();
    }
}
