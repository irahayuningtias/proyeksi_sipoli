<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pemasukan;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Schema;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasukans = Pemasukan::all();
        return view('pemasukan.index', compact(
            'pemasukans'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Pemasukan;
        return view('pemasukan.create', compact(
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
        $model = new Pemasukan;
        $model->id_adminmk = $request->id_adminmk;
        $model->tgl_masuk = $request->tgl_masuk;
        $model->jenis_pemasukan = $request->jenis_pemasukan;
        $model->detail = $request->detail;
        $model->jlm_masuk = $request->jlm_masuk;
        $model->save();

        return redirect('pemasukan')
        ->with('success', 'data pemasukan berhasil ditambahkan');
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
        $pemasukan = Pemasukan::find($id);
        return view('pemasukan.edit', compact('pemasukan'));
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
        $pemasukan = Pemasukan::find($id);
        $pemasukan->id_adminmk = $request->id_adminmk;
        $pemasukan->tgl_masuk = $request->tgl_masuk;
        $pemasukan->jenis_pemasukan = $request->jenis_pemasukan;
        $pemasukan->detail = $request->detail;
        $pemasukan->jlm_masuk = $request->jlm_masuk;
        $pemasukan->save();

        return redirect()->route('pemasukan.index')
        ->with('success', 'pemasukan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemasukan $pemasukan)
    {
        Pemasukan::destroy($pemasukan->id);
        return redirect()->route('pemasukan.index'); 
    }
}
