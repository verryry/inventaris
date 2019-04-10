<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMutasiBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutasi_barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_barang')->nullable()->default(null);
            $table->string('featured_image')->nullable()->default(null);
            $table->string('nama_barang')->nullable()->default(null);
            $table->string('jenis_barang')->nullable()->default(null);
            $table->string('status')->nullable()->default(null);
            $table->string('dari')->nullable()->default(null);
            $table->string('stok')->nullable()->default(null);
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mutasi_barangs');
    }
}
