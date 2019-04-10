<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MutasiBarang;
use App\Http\Requests\MutasiBarangRequest;

class MutasiBarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['barang'] = MutasiBarang::all();
        return view('backend.mutasi_barang.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.mutasi_barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MutasiBarangRequest $request)
    {
      $featured_image = "";
      if ($request->hasFile('featured_image')) {
        $path = 'images';
        $file = $request->featured_image;
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(1111,9999).".".$extension;
        $file->move($path, $fileName);
        $featured_image = $fileName;
      }

      $input['dari'] = $request->dari;
      $input['nama_barang'] = $request->nama_barang;
      $input['kode_barang'] = $request->kode_barang;
      $input['jenis_barang'] = $request->jenis_barang;
      $input['featured_image'] = $featured_image;
      $input['status'] = $request->status;
      $input['stok'] = $request->stok;
      MutasiBarang::create($input);

      return redirect()->route('mutasi-barang.index')->with('succes','Berhasil Mutasi Barang');
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
