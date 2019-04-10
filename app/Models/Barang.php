<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  protected $fillable = [
      'stok',
      'peminjam',
      'nama_barang',
      'kode_barang',
      'jenis_barang',
      'featured_image',
      'status',
  ];

  public function barangKeluar()
  {
    return $this->hasMany('App\Models\BarangKeluar');
  }
  public function barangRusak()
  {
    return $this->hasMany('App\Models\BarangRusak');
  }
  public function mutasiKeluar()
  {
    return $this->hasMany('App\Models\MutasiKeluar');
  }
}
