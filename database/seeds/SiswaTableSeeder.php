<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('siswas')->insert([
        'nama' => 'jajang',
        'kelas' => '10',
        'jurusan' => 'RPL',
        'absen' => '25',
      ]);
      DB::table('siswas')->insert([
        'nama' => 'Juminten',
        'kelas' => '10',
        'jurusan' => 'AP',
        'absen' => '31',
      ]);
      DB::table('siswas')->insert([
        'nama' => 'Juleha',
        'kelas' => '12',
        'jurusan' => 'RPL',
        'absen' => '20',
      ]);
      DB::table('siswas')->insert([
        'nama' => 'Mamat',
        'kelas' => '10',
        'jurusan' => 'AK',
        'absen' => '29',
      ]);
      DB::table('siswas')->insert([
        'nama' => 'Kakok',
        'kelas' => '12',
        'jurusan' => 'AK',
        'absen' => '25',
      ]);
      DB::table('siswas')->insert([
        'nama' => 'Neni',
        'kelas' => '11',
        'jurusan' => 'PM',
        'absen' => '21',
      ]);
      DB::table('siswas')->insert([
        'nama' => 'Memet',
        'kelas' => '10',
        'jurusan' => 'RPL',
        'absen' => '21',
      ]);
      DB::table('siswas')->insert([
        'nama' => 'Somat',
        'kelas' => '12',
        'jurusan' => 'PM',
        'absen' => '11',
      ]);
      DB::table('siswas')->insert([
        'nama' => 'Ajeng',
        'kelas' => '12',
        'jurusan' => 'RPL',
        'absen' => '1',
      ]);
      DB::table('siswas')->insert([
        'nama' => 'jajang',
        'kelas' => '12',
        'jurusan' => 'PM',
        'absen' => '3',
      ]);
      DB::table('siswas')->insert([
        'nama' => 'Jule',
        'kelas' => '12',
        'jurusan' => 'PM',
        'absen' => '3',
      ]);
      DB::table('siswas')->insert([
        'nama' => 'Kali',
        'kelas' => '10',
        'jurusan' => 'AP',
        'absen' => '15',
      ]);
      DB::table('siswas')->insert([
        'nama' => 'Haya',
        'kelas' => '10',
        'jurusan' => 'PM',
        'absen' => '17',
      ]);
      DB::table('siswas')->insert([
        'nama' => 'Verry',
        'kelas' => '12',
        'jurusan' => 'AK',
        'absen' => '2',
      ]);
    }
}
