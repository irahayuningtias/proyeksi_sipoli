<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pasien;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Schema;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasien.index', compact(
            'pasiens'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Pasien;
        return view('pasien.create', compact(
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
        $model = new Pasien;
        $model->id_admin = $request->id_admin;
        $model->nama_pasien = $request->nama_pasien;
        $model->umur = $request->umur;
        $model->prodi = $request->prodi;
        $model->jurusan = $request->jurusan;
        $model->save();

        return redirect('pasien')
        ->with('success', 'data pasien berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.edit', compact('pasien'));
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
        $pasien = Pasien::find($id);
        $pasien->id_admin = $request->id_admin;
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->umur = $request->umur;
        $pasien->prodi = $request->prodi;
        $pasien->jurusan = $request->jurusan;
        $pasien->save();

        return redirect('pasien')
        ->with('success', 'data pasien berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $id)
    {
        Pasien::destroy($pasien->id);
        return redirect()->route('pasien.index'); 
    }
}
