<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_progress', function (Blueprint $table) {
            // Jenis Engine
            $table->engine = 'InnoDB';

            $table->id();
            $table->foreignId('progres_id')->nullable()->constrained('progres_lapangans')->onUpdate('cascade')->onDelete('cascade');
            $table->string('olo')->nullable();
            $table->integer('plan_aktivasi');
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
        Schema::dropIfExists('rekap_progress');
    }
}
