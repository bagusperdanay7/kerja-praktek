<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Diconnect;
use App\Models\Database;
use App\Models\Wfm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class DisconnectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('disconnect.index', [
        //     "title" => "Disconnect",
        //     'database' => Database::all(),
        //     'wfms' => Wfm::all(),
        //     'disconnects' => Diconnect::all(),
        //     'disconnect' => Diconnect::orderBy('id')->filter(request([
        //         'no_ao', 'plan_cabut', 'witel', 'olo', 'jenis_ont', 'status'
        //     ]))->get()
        // ]);

        $disconnect = DB::table('diconnects')
            ->join('wfms', 'wfms.id', '=', 'diconnects.wfm_id')
            ->where('order_type', '=', 'DISCONNECT')
            ->get();

        return view('disconnect.index', [
            'disconnect' => $disconnect,
            'title' => 'Disconnect',
            'database' => Database::all(),
            'wfms' => Wfm::all(),
            'disconnects' => Diconnect::orderBy('id')->filter(request([
                'no_ao', 'plan_cabut', 'witel', 'olo', 'jenis_ont', 'status'
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
        if (Gate::any(['admin', 'editor'])) {
            return view('disconnect.edit', ['title' => 'Update Data - Disconnect', 'dis' => $diconnect]);
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
    public function update(Request $request, Diconnect $diconnect)
    {

        $diconnect->wfm_id = $request->wfm_id;
        $diconnect->no_ao = $request->older;
        $diconnect->witel = $request->witel;
        $diconnect->olo = $request->olo;
        $diconnect->lokasi = $request->lokasi;
        $diconnect->jenis_ont = $request->jenis_ont;
        $diconnect->jumlah_ont = $request->jumlah_ont;
        $diconnect->status = $request->status;
        $diconnect->plan_cabut = $request->plan_cabut;
        $diconnect->pic = $request->pic;
        $diconnect->save();
        sleep(1);
        //
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
