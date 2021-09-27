<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExeSummsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exe_summs', function (Blueprint $table) {
            $table->id();
            $table->string('olo');
            $table->integer('plan_aktivasi');
            $table->integer('plan_modify');
            $table->integer('plan_disconnect');
            $table->integer('aktivasi');
            $table->integer('modify');
            $table->integer('disconnect');
            $table->integer('resume');
            $table->integer('suspend');
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
        Schema::dropIfExists('exe_summs');
    }
}
