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
            $table->foreignId('pekerjaan_id')->nullable()->constrained('pekerjaan_lapangans')->onUpdate('cascade')->onDelete('cascade');
            $table->string('olo_wfm')->nullable();
            $table->string('status_wfm')->nullable();
            // $table->string('olo_lapangan')->nullable();
            // $table->string('status_lapangan')->nullable();

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
