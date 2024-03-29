<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorSpecialSessionTable extends Migration
{
    public function up()
    {
        Schema::create('author_special_session', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('special_session_id');
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreign('special_session_id')->references('id')->on('special_sessions')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('author_special_session');
    }
}
