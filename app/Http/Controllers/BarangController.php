<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Requests\BarangRequest;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['barang'] = Barang::where('status','tersedia')->orWhere('status','masuk')->get();
        return view('backend.barang.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarangRequest $request)
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

        $input['nama_barang'] = $request->nama_barang;
        $input['kode_barang'] = $request->kode_barang;
        $input['jenis_barang'] = $request->jenis_barang;
        $input['featured_image'] = $featured_image;
        $input['status'] = $request->status;
        $input['stok'] = $request->stok;
        Barang::create($input);

        return redirect()->route('barang.index')->with('succes','Berhasil Tambah Barang');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['barang'] = Barang::findOrFail($id);
        return view('backend.barang.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['barang'] = Barang::findOrFail($id);
        return view('backend.barang.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BarangRequest $request, $id)
    {
        $barang = Barang::findOrFail($id);

        if ($request->file('featured_image') == "") {
          $barang->featured_image = $barang->featured_image;
        }else{
          $path = 'images';
          $file = $request->file('featured_image');
          $ext = $file->getClientOriginalExtension();
          $fileName = rand(1111,9999).".".$ext;
          $file->move($path,$fileName);
          $barang->featured_image = $fileName;
        }
        if ($request->jenis_barang == "") {
          $barang->jenis_barang = $barang->jenis_barang;
        }
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->status = $request->status;
        $barang->stok = $request->stok;
        $barang->update();

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $barang = Barang::findOrFail($id);
      $barang->delete();
      return redirect()->route('barang.index');
    }
}
