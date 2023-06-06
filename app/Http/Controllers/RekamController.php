<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rekam;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Schema;

class RekamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekams = Rekam::all();
        return view('rekam.index', compact(
            'rekams'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Rekam;
        return view('rekam.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Rekam;
        $model->id_adminrm = $request->id_adminrm;
        $model->id_ps = $request->id_ps;
        $model->tgl_periksa = $request->tgl_periksa;
        $model->jenis_penyakit = $request->jenis_penyakit;
        $model->keluhan = $request->keluhan;
        $model->save();

        return redirect('rekam')
        ->with('success', 'data rekam berhasil ditambahkan');
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
    public function edit($id)
    {
        $rekam = Rekam::find($id);
        return view('rekam.edit', compact('rekam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rekam = Rekam::find($id);
        $rekam->id_adminrm = $request->id_adminrm;
        $rekam->id_ps = $request->id_ps;
        $rekam->tgl_periksa = $request->tgl_periksa;
        $rekam->jenis_penyakit = $request->jenis_penyakit;
        $rekam->keluhan = $request->keluhan;
        $rekam->save();

        return redirect()->route('rekam.index')
        ->with('success', 'rekam Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rekam $rekam)
    {
        Rekam::destroy($rekam->id);
        return redirect()->route('rekam.index'); 
    }
}
