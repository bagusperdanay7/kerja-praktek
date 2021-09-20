<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgresLapangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progres_lapangans', function (Blueprint $table) {
            $table->id();
            $table->integer('no')->nullable();
            $table->string('wilayah')->nullable();
            $table->string('ao')->nullable();
            $table->string('olo')->nullable();
            $table->string('order_type')->nullable();
            $table->text('alamat_nama_toko')->nullable();
            $table->string('progres_pt1')->nullable();
            $table->date('p_pt2_tgl_order')->nullable();
            $table->date('p_pt2_close_order')->nullable();
            $table->string('datek_odp')->nullable();
            $table->string('gpon')->nullable();
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('progres_lapangans');
    }
}
