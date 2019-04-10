<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\BarangKeluar;
use App\Models\Siswa;
use App\Http\Requests\BarangKeluarRequest;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['barang'] = BarangKeluar::where('status','keluar')->get();
      return view('backend.barang_keluar.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $data['barang'] = Barang::all();
      $data['siswa'] = Siswa::all();
      return view('backend.barang_keluar.create',$data);
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
      $barang->stok -= $request->jmlh_pinjam;
      $barang->save();

      $input['id_barang'] = $request->id_barang;
      $input['id_siswa'] = $request->id_siswa;
      $input['jmlh_pinjam'] = $request->jmlh_pinjam;
      $input['status'] = $request->status;
      BarangKeluar::create($input);

      return redirect()->route('barang-keluar.index');
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
        return view('backend.barang_keluar.show',$data);
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

    public function in($id)
    {
      $barangMasuk = BarangKeluar::find($id);
      $barangMasuk->status = 'masuk';
      $barangMasuk->save();

      $barang = Barang::find($barangMasuk->id_barang);
      $barang->stok += $barangMasuk->jmlh_pinjam;
      $barang->save();

      return redirect()->route('barang-keluar.index');
    }
}
