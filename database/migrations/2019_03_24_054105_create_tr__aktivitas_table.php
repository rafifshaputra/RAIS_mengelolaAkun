<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTRAktivitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_aktivitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',128);
            $table->time('waktuMulai');
            $table->time('waktuSelesai');
            $table->string('detailAktivitas',128);
            $table->string('keterangan',128)->nullable($value=true);
            $table->date('tanggal');
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
        Schema::dropIfExists('tr_aktivitas');
    }
}
