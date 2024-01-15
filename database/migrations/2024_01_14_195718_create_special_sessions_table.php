<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('special_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('spe_order');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('special_sessions');
    }
    
}