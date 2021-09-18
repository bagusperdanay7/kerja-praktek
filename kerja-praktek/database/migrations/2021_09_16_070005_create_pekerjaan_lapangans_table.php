<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaanLapangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjaan_lapangans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->nullable();
            $table->string('witel')->nullable();
            $table->string('kegiatan')->nullable();
            $table->string('no_ao')->nullable()->unique();
            $table->string('olo')->nullable();
            $table->string('layanan')->nullable();
            $table->string('bandwidth')->nullable();
            $table->string('datek_gpon')->nullable();
            $table->string('datek_odp')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('pekerjaan_lapangans');
    }
}
