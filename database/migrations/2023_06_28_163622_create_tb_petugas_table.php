<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_petugas', function (Blueprint $table) {
            $table->increments('petugas_id');
            $table->string('petugas_nim');
            $table->string('petugas_nama');
            $table->string('petugas_jabatan');
            $table->string('petugas_alamat');
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
        Schema::dropIfExists('tb_petugas');
    }
}
