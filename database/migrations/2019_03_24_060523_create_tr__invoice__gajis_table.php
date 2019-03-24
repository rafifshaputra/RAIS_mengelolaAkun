<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTRInvoiceGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_invoice_gajis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idPegawai');
            $table->foreign('idPegawai')
                  ->references('id')
                  ->on('m_pegawais')
                  ->onDelete('cascade');
            $table->bigInteger('jumlahGaji');
            $table->bigInteger('honorarium');
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
        Schema::dropIfExists('tr_invoice_gajis');
    }
}
