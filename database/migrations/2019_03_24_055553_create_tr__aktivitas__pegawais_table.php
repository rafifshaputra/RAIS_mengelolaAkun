<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTRAktivitasPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_aktivitas_pegawais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idPegawai');
            $table->foreign('idPegawai')
                  ->references('id')
                  ->on('m_pegawais')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('idAktivitas');
            $table->foreign('idAktivitas')
                  ->references('id')
                  ->on('tr_aktivitas')
                  ->onDelete('cascade');
            $table->integer('durasi');
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
        Schema::dropIfExists('tr_aktivitas_pegawais');
    }
}
