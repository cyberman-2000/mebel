<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMebelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mebels', function (Blueprint $table) {
            $table->id();
            $table->string('mebel_name');
            $table->integer('mebel_cat_id');
            $table->float('mebel_price');
            $table->string('about');
            $table->string('img');
            $table->string('width');
            $table->string('height');
            $table->integer('mebel_type_id');
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
        Schema::dropIfExists('mebels');
    }
}
