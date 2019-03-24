<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTRPurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_purchase_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idAset');
            $table->foreign('idAset')
                  ->references('id')
                  ->on('m_asets')
                  ->onDelete('cascade');
            $table->date('tanggalBeli');
            $table->date('tanggalAntar');
            $table->string('namaToko',128);
            $table->bigInteger('harga');
            $table->integer('jumlahBarang');
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
        Schema::dropIfExists('tr_purchase_orders');
    }
}
