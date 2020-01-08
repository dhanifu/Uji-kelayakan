<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->bigIncrements('id_inventaris');
            $table->string('nama');
            $table->string('kondisi');
            $table->string('keterangan');
            $table->integer('jumlah');
            $table->bigInteger('id_jenis');
            $table->date('tanggal_register');
            $table->bigInteger('id_ruang');
            $table->string('kode_inventaris');
            $table->bigInteger('id_petugas');
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
        Schema::dropIfExists('inventaris');
    }
}
