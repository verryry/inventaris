<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
      'nama',
      'kelas',
      'jurusan',
      'absen',
    ];

    public function barang_keluar()
    {
      return $this->hasMany('App\Models\BarangKeluar');
    }
}
