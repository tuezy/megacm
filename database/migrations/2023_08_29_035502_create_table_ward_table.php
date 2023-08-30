<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableWardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_ward', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_city')->default(0);
            $table->integer('id_district')->default(0);
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('code', 5)->nullable();
            $table->string('level', 100)->nullable();
            $table->integer('numb')->default(0);
            $table->string('status')->nullable();
            $table->integer('date_updated')->default(0);
            $table->integer('date_created')->default(0);
            $table->double('ship_price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_ward');
    }
}
