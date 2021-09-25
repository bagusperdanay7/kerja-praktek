<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Diconnect;
use Illuminate\Http\Request;

class DisconnectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('disconnect.index', ['title' => 'Disconnect', 'disconnects' => Diconnect::all()]);
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
    public function edit(Diconnect $diconnect)
    {
        return view('disconnect.edit', ['title' => 'Halaman Edit', 'dis' => $diconnect]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diconnect $diconnect)
    {
        $diconnect->wfm_id = $request->wfm_id;
        $diconnect->older = $request->older;
        $diconnect->customer = $request->customer;
        $diconnect->lokasi = $request->lokasi;
        $diconnect->kota = $request->kota;
        $diconnect->jenis_ont = $request->jenis_ont;
        $diconnect->status = $request->status;
        $diconnect->plan_cabut = $request->plan_cabut;
        $diconnect->pic = $request->pic;
        $diconnect->save();
        sleep(1);
        return redirect()->route('dis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diconnect $diconnect)
    {
        $diconnect->delete();
        sleep(1);
        return redirect()->route('dis.index');
    }
}
