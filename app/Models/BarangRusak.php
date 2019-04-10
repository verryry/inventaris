<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BarangRusak extends Model
{
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
    'id_barang',
    'jmlh_rusak',
    'keterangan',
  ];

  public function barang()
  {
    return $this->belongsTo('App\Models\Barang','id_barang','id');
  }
}
