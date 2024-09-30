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
        $this->authorize('admin');
        return view('database_table.index', ["title" => "Database", "datas" => Database::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        return view('database_table.create', ["title" => "Tambah Data - Database"]);
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
        sleep(1);
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
        $this->authorize('admin');
        return view('database_table.edit', compact('database'), ["title" => "Update Data - Database"]);
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

        $database->witel = $request->witel;
        $database->olo_isp = $request->olo_isp;
        $database->site_kriteria = $request->site_kriteria;
        $database->order_type = $request->order_type;
        $database->produk = $request->produk;
        $database->satuan = $request->satuan;
        $database->status_ncx = $request->status_ncx;
        $database->save();
        sleep(1);
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
        sleep(1);
        return back();
    }

    public function databaseexport()
    {
        return Excel::download(new DatabaseExport, 'database.xlsx');
    }

    public function databaseimport(Request $request, Database $database)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('database_temp', $namaFile);

        Excel::import(new DatabaseImport, public_path('/database_temp/' . $namaFile));

        return redirect()->route('database.index');
    }
}
