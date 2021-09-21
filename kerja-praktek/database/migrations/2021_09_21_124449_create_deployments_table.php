<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deployments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rekap_id')->constrained('rekaps')->onDelete('cascade')->onUpdate('cascade');
            $table->string('ao')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('olo')->nullable();
            $table->string('witel')->nullable();
            $table->string('produk')->nullable();
            $table->string('status_ncx')->nullable();
            $table->string('status_wfm')->nullable();
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
        Schema::dropIfExists('deployments');
    }
}
