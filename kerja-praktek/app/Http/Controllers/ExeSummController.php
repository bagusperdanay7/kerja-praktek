<?php

namespace App\Http\Controllers;

use App\Models\Database;
use App\Models\ExeSumm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ExeSummController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('exeSumm.index', ['title' => 'Exe Summ', 'exeSumm' => ExeSumm::all()]);
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
     * @param  \App\Models\ExeSumm  $exeSumm
     * @return \Illuminate\Http\Response
     */
    public function show(ExeSumm $exeSumm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExeSumm  $exeSumm
     * @return \Illuminate\Http\Response
     */
    public function edit(ExeSumm $exeSumm)
    {
        if (Gate::any(['admin', 'editor'])) {
            return view('exeSumm.edit', ['title' => 'Update Data - Deployment', 'exeSumm' => $exeSumm, 'database' => Database::all()]);
        } else {
            abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExeSumm  $exeSumm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExeSumm $exeSumm)
    {
        $exeSumm->olo = $request->olo;
        $exeSumm->plan_aktivasi = $request->plan_aktivasi;
        $exeSumm->plan_modify = $request->plan_modify;
        $exeSumm->plan_disconnect = $request->plan_disconnect;
        $exeSumm->aktivasi = $request->aktivasi;
        $exeSumm->modify = $request->modify;
        $exeSumm->disconnect = $request->disconnect;
        $exeSumm->resume = $request->resume;
        $exeSumm->suspend = $request->suspend;
        sleep(1);
        return redirect()->route('xSum.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExeSumm  $exeSumm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExeSumm $exeSumm)
    {
        $exeSumm->delete();
        sleep(1);
        return redirect()->route('xSum.index');
    }
}
