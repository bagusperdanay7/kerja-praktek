<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databases', function (Blueprint $table) {
            // Jenis Engine
            $table->engine = 'InnoDB';

            $table->id();
            $table->string('witel')->nullable();
            $table->string('olo_isp')->nullable();
            $table->string('site_kriteria')->nullable();
            $table->string('order_type')->nullable();
            $table->string('produk')->nullable();
            $table->string('satuan')->nullable();
            $table->string('status_ncx')->nullable();
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
        Schema::dropIfExists('databases');
    }
}
