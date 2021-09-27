<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiconnectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diconnects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wfm_id')->constrained('wfms')->onDelete('cascade')->onDelete('cascade');
            $table->string('older')->nullable();
            $table->string('customer')->nullable();
            $table->text('lokasi')->nullable();
            $table->string('kota')->nullable();
            $table->string('jenis_ont')->nullable();
            $table->string('status')->nullable();
            $table->string('plan_cabut')->nullable();
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
        Schema::dropIfExists('diconnects');
    }
}
