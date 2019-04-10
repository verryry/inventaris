<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MutasiKeluar extends Model
{
  protected $fillable = [
      'id_barang',
      'jmlh',
      'ke',
      'keterangan',
  ];

  public function barang()
  {
    return $this->belongsTo('App\Models\Barang','id_barang','id');
  }
}
