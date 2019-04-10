<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MutasiBarang extends Model
{
  use SoftDeletes;
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
protected $fillable = [
    'stok',
    'dari',
    'nama_barang',
    'kode_barang',
    'jenis_barang',
    'featured_image',
    'status',
];
}
