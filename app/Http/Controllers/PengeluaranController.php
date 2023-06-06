<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengeluaran;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Schema;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengeluarans = Pengeluaran::all();
        return view('pengeluaran.index', compact(
            'pengeluarans'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Pengeluaran;
        return view('pengeluaran.create', compact(
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
        $model = new Pengeluaran;
        $model->id_adminkl = $request->id_adminkl;
        $model->tgl_keluar = $request->tgl_keluar;
        $model->jenis_keluar = $request->jenis_keluar;
        $model->detail_keluar = $request->detail_keluar;
        $model->jml_item = $request->jml_item;
        $model->jml_keluar= $request->jml_keluar;
        $model->save();

        return redirect('pengeluaran')
        ->with('success', 'data pengeluaran berhasil ditambahkan');
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
        $pengeluaran = Pengeluaran::find($id);
        return view('pengeluaran.edit', compact('pengeluaran'));
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
        $pengeluaran = Pengeluaran::find($id);
        $pengeluaran->id_adminkl = $request->id_adminkl;
        $pengeluaran->tgl_keluar = $request->tgl_keluar;
        $pengeluaran->jenis_keluar = $request->jenis_keluar;
        $pengeluaran->detail_keluar = $request->detail_keluar;
        $pengeluaran->jml_item = $request->jml_item;
        $pengeluaran->jml_keluar = $request->jml_keluar;
        $pengeluaran->save();

        return redirect()->route('pengeluaran.index')
        ->with('success', 'pengeluaran Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengeluaran $pengeluaran)
    {
        Pengeluaran::destroy($pengeluaran->id);
        return redirect()->route('pengeluaran.index'); 
    }
}
