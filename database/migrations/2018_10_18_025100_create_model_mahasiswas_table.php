<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');//membuat kolom id auto increments
			$table->string('nama');//membuat kolom nama
			$table->string('email');//membuat kolom email
			$table->string('no_telp');//membuat kolom no telp
			$table->text('alamat');//membuat kolom alamat dengan tipe text
            $table->timestamps();//membua kolom created_at dan update _at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_mahasiswas');
    }
}
