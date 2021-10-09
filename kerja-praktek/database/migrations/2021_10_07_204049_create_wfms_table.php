<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWfmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wfms', function (Blueprint $table) {
            // Jenis Engine
            $table->engine = 'InnoDB';

            $table->id();
            $table->date('tgl_bulan_th')->nullable();
            $table->string('no_ao')->nullable();
            $table->string('witel')->nullable();
            $table->string('olo_isp')->nullable();
            $table->string('site_kriteria')->nullable();
            $table->string('sid')->nullable();
            $table->string('site_id')->nullable();
            $table->string('order_type')->nullable();
            $table->string('produk')->nullable();
            $table->string('satuan')->nullable();
            $table->string('kapasitas_bw')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->text('alamat_asal')->nullable();
            $table->text('alamat_tujuan')->nullable();
            $table->string('status_ncx')->nullable();
            $table->string('berita_acara')->nullable();
            $table->date('tgl_complete')->nullable();
            $table->string('status_wfm')->nullable();
            $table->string('alasan_cancel')->nullable();
            $table->string('cancel_by')->nullable();
            $table->date('start_cancel')->nullable();
            $table->date('ready_after_cancel')->nullable();
            $table->date('integrasi')->nullable();
            $table->string('metro')->nullable();
            $table->string('ip')->nullable();
            $table->string('port')->nullable();
            $table->string('metro2')->nullable();
            $table->string('ip2')->nullable();
            $table->string('port2')->nullable();
            $table->string('vlan')->nullable();
            $table->string('vcid')->nullable();
            $table->string('gpon')->nullable();
            $table->string('ip3')->nullable();
            $table->string('port3')->nullable();
            $table->string('sn')->nullable();
            $table->string('port4')->nullable();
            $table->string('type')->nullable();
            $table->text('capture_metro_backhaul')->nullable();
            $table->text('capture_metro_access')->nullable();
            $table->text('capture_gpon')->nullable();
            $table->string('pic')->nullable();
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
        Schema::dropIfExists('wfms');
    }
}
