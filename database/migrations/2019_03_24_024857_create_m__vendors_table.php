<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namaVendor',128);
            $table->string('jenisVendor',128);
            $table->string('alamat',128);
            $table->string('kontak',128);
            $table->string('informasi',128);
            $table->string('biaya',128);
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('m_vendors');


    }
}
