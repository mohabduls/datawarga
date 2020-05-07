<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepalaKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepala_keluarga', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->bigInteger('no_nik');
            $table->bigInteger('no_kk');
            $table->string('ttl');
            $table->string('jenis_kelamin');
            $table->string('golongan_darah');
            $table->string('alamat');
            $table->string('agama');
            $table->string('status_perkawinan');
            $table->string('pekerjaan');
            $table->string('kewarganegaraan');
            $table->integer('rt_id');
            $table->integer('rw_id');
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
        Schema::dropIfExists('kepala_keluarga');
    }
}
