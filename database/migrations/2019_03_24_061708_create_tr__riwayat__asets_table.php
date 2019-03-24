<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTRRiwayatAsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_riwayat_asets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idPesanan');
            $table->unsignedBigInteger('idAset');
            $table->foreign('idAset')
                  ->references('id')
                  ->on('m_asets')
                  ->onDelete('cascade');
            $table->bigInteger('jumlahAset');
            $table->string('keterangan',128)->nullable();
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
        Schema::dropIfExists('tr_riwayat_asets');
    }
}
