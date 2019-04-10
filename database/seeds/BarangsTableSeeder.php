<?php

use Illuminate\Database\Seeder;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('barangs')->insert([
        'kode_barang' => '11110',
        'nama_barang' => 'Proyektor',
        'jenis_barang' => 'elektronik',
        'stok' => '10',
      ]);
      DB::table('barangs')->insert([
        'kode_barang' => '11112',
        'nama_barang' => 'Gitar Listrik',
        'jenis_barang' => 'electronik',
        'stok' => '2',
      ]);
      DB::table('barangs')->insert([
        'kode_barang' => '12119',
        'nama_barang' => 'Sapu',
        'jenis_barang' => 'perabotan',
        'stok' => '19',
      ]);
    }
}
