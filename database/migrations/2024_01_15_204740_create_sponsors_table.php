<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorsTable extends Migration
{
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('src');
            $table->string('alt');
            $table->integer('spo_order');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sponsors');
    }
}