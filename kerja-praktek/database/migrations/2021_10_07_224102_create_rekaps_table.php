<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekaps', function (Blueprint $table) {
            // Jenis Engine
            $table->engine = 'InnoDB';

            $table->foreignId('wfm_id')->nullable()->constrained('wfms')->onUpdate('cascade')->onDelete('cascade');
            $table->string('olo')->nullable();
            $table->integer('aktivasi')->nullable();
            $table->integer('modify')->nullable();
            $table->integer('disconnect')->nullable();
            $table->integer('resume')->nullable();
            $table->integer('suspend')->nullable();
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
        Schema::dropIfExists('rekaps');
    }
}
