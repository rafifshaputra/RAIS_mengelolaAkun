<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTRDetailPurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_detail_purchase_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idAset');
            $table->foreign('idAset')
                  ->references('id')
                  ->on('m_asets')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('idPurchaseOrder');
            $table->foreign('idPurchaseOrder')
                  ->references('id')
                  ->on('tr_purchase_orders')
                  ->onDelete('cascade');
            $table->string('deskripsi',128);
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
        Schema::dropIfExists('tr_detail_purchase_orders');
    }
}
