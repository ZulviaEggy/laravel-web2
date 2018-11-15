<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_barangs', function (Blueprint $table) {
            $table->increments('id');
			$table->Varchar('nama_barang');//membuat kolom nama
			$table->integer('stok');//membuat kolom email
			$table->integer('harga');//membuat kolom no telp
			$table->date('expired_date');
			$table->date('tanggal_produksi');//membuat kolom alamat dengan tipe text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_barangs');
    }
}
