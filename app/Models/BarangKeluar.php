<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BarangKeluar extends Model
{
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
    'id_barang',
    'id_siswa',
    'jmlh_pinjam',
    'status',
  ];

  public function barang()
  {
    return $this->belongsTo('App\Models\Barang','id_barang','id');
  }
  public function siswa()
  {
    return $this->belongsTo('App\Models\Siswa','id_siswa','id');
  }
}
