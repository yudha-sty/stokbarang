<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangKeluarBarangMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_keluar_barang_masuk', function (Blueprint $table) {
            $table->integer('id_barang')->unsigned;
/*             $table->unsignedBigInteger('id_barang_keluar');
            $table->unsignedBigInteger('id_barang_masuk'); */
            $table->string('nama_barang');
            $table->string('kategori');
            $table->string('pendapatan');
            $table->string('stok_akhir');
            $table->timestamps();

/*             $table->foreign('id_barang_masuk')->references('id')->on('barang_masuk');
            $table->foreign('id_barang_keluar')->references('id')->on('barang_keluar'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang_keluar_barang_masuk');
    }
}
