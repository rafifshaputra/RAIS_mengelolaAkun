<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTRPortofolioVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_portofolio_vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('deskripsi');
            $table->unsignedBigInteger('idVendor');
            $table->foreign('idVendor')
                  ->references('id')
                  ->on('m_vendors')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('tr_portofolio_vendors');
    }
}
