<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_pegawais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namaDepan',128);
            $table->string('namaBelakang',128);
            $table->string('jenisKelamin',10);
            $table->date('tanggalLahir');
            $table->string('alamat',128);
            $table->date('tanggalMasuk');
            $table->string('statusPegawai',128);
            $table->string('divisi',128);
            $table->string('posisi',128);
            $table->string('kategori',128);
            $table->bigInteger('gajiStandar');
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
        Schema::dropIfExists('m_pegawais');
    }
}
