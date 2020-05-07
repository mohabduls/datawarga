<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rt', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->integer('no_rt');
            $table->bigInteger('no_nik');
            $table->bigInteger('no_kk');
            $table->string('ttl');
            $table->string('jenis_kelamin');
            $table->string('golongan_darah');
            $table->string('alamat');
            $table->string('agama');
            $table->string('status_perkawinan');
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
        Schema::dropIfExists('rt');
    }
}
