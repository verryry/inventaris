<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\MutasiKeluar;
use Illuminate\Http\Request;

class MutasiBarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['mutasi'] = MutasiKeluar::all();
      return view('backend.mutasi_keluar.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $data['barang'] = Barang::all();
      return view('backend.mutasi_keluar.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $barang = Barang::find($request->id_barang);
      $barang->stok -= $request->jmlh;
      $barang->save();

      $input['id_barang'] = $request->id_barang;
      $input['jmlh'] = $request->jmlh;
      $input['ke'] = $request->ke;
      $input['keterangan'] = $request->keterangan;
      MutasiKeluar::create($input);

      return redirect()->route('mutasi-keluar.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
