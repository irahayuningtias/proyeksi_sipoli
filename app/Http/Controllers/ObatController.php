<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Obat;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Schema;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obats = Obat::all();
        return view('obat.index', compact(
            'obats'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Obat;
        return view('obat.create', compact(
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
        $model = new Obat;
        $model->id_staffob = $request->id_staffob;
        $model->nama_obat = $request->nama_obat;
        $model->jenis_obat = $request->jenis_obat;
        $model->manfaat = $request->manfaat;
        $model->tgl_bl = $request->tgl_bl;
        $model->tgl_exp = $request->tgl_exp;
        $model->jml = $request->jml;
        $model->save();

        return redirect('obat')
        ->with('success', 'data obat berhasil ditambahkan');
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
        $obat = Obat::find($id);
        return view('obat.edit', compact('obat'));
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
        $obat = Obat::find($id);
        $obat->id_staffob = $request->id_staffob;
        $obat->nama_obat = $request->nama_obat;
        $obat->jenis_obat = $request->jenis_obat;
        $obat->manfaat = $request->manfaat;
        $obat->tgl_bl = $request->tgl_bl;
        $obat->tgl_exp = $request->tgl_exp;
        $obat->jml = $request->jml;
        $obat->save();

        return redirect()->route('obat.index')
        ->with('success', 'obat Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obat $obat)
    {
        Obat::destroy($obat->id);
        return redirect()->route('obat.index'); 
    }
}
