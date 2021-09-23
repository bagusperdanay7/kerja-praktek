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
            $table->string('witel')->nullable();
            $table->string('ao')->nullable();
            $table->string('olo')->nullable();
            $table->string('produk')->nullable();
            $table->text('alamat_toko')->nullable();
            $table->date('tanggal_order_pt1')->nullable();
            $table->string('keterangan_pt1')->nullable();
            $table->date('tanggal_order_pt2')->nullable();
            $table->string('keterangan_pt2')->nullable();
            $table->string('datek_odp')->nullable();
            $table->string('datek_gpon')->nullable();
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
