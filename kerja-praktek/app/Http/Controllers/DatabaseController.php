<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Database;
use Illuminate\Http\Request;
use App\Exports\DatabaseExport;
use App\Imports\DatabaseImport;
use Maatwebsite\Excel\Facades\Excel;

class DatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('database_table.index',['datas' => Database::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('database_table.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Database $database)
    {
        $database->witel = $request->witel;
        $database->olo_isp = $request->olo_isp;
        $database->site_kriteria = $request->site_kriteria;
        $database->order_type = $request->order_type;
        $database->produk = $request->produk;
        $database->satuan = $request->satuan;
        $database->status_ncx = $request->status_ncx;
        $database->save();

        return redirect()->route('database.index');
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
    public function edit(Database $database)
    {

        return view('database_table.edit',compact('database'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Database $database)
    {

        // $database->update([
        //     'witel' => $request->witel,
        //     'olo_isp' => $request->olo_isp,
        //     'site_kriteria' => $request->site_kriteria,
        //     'order_type' => $request->order_type,
        //     'produk' => $request->produk,
        //     'satuan' => $request->satuan,
        //     'status_ncx' => $request->status_ncx
        // ]);
        $database->witel = $request->witel;
        $database->olo_isp = $request->olo_isp;
        $database->site_kriteria = $request->site_kriteria;
        $database->order_type = $request->order_type;
        $database->produk = $request->produk;
        $database->satuan = $request->satuan;
        $database->status_ncx = $request->status_ncx;
        $database->save();

        return redirect()->route('database.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Database $database)
    {
        $database->delete();
        return back();
    }

    public function databaseexport()
    {
        return Excel::download(new DatabaseExport,'database.xlsx');
    }

    public function databaseimport(Request $request, Database $database)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('database_temp', $namaFile);

        Excel::import(new DatabaseImport, public_path('/database_temp/'.$namaFile));

        return redirect()->route('database.index');
    }
}
