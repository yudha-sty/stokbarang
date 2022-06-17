<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang_masuk');            
            $table->unsignedBigInteger('id_barang_keluar');
            $table->string('pendapatan');
            $table->string('stok_akhir');

            $table->timestamps();

            $table->foreign('id_barang_masuk')->references('id')->on('barang_masuk');
            $table->foreign('id_barang_keluar')->references('id')->on('barang_keluar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
?>