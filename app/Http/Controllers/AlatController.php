<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alat;
use App\Models\User;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Schema;

class AlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alats = Alat::all();
        // $id_alats = Alat::pluck('id_alat');
        // foreach ($alats as $alat){
        // echo $alat->id_alat;
        // }
        return view('alat.index', compact(
            'alats'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Alat;
        return view('alat.create', compact(
            'model'
        ));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        $model = new Alat;
        $model->id_staf = $request->id_staf;
        $model->nama_alat = $request->nama_alat;
        $model->jenis_alat = $request->jenis_alat;
        $model->harga = $request->harga;
        $model->jumlah = $request->jumlah;
        $model->save();

        return redirect('alat')
        ->with('success', 'data admin berhasil ditambahkan');
        
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
        $alat = Alat::find($id);
        return view('alat.edit', compact('alat'));
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
        $alat = Alat::find($id);
        $alat ->id_staf = $request->id_staf;
        $alat ->nama_alat = $request->nama_alat;
        $alat ->jenis_alat = $request->jenis_alat;
        $alat ->harga = $request->harga;
        $alat ->jumlah = $request->jumlah;
        $alat -> save();

        return redirect()->route('alat.index')
        ->with('success', 'alat Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alat $alat)
    {
        Alat::destroy($alat->id);
        return redirect()->route('alat.index'); 
    }
}
