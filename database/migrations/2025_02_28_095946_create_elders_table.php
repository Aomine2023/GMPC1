<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEldersTable extends Migration
{
    public function up()
    {
        Schema::create('elders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('elder_name');
            $table->string('designation')->nullable();
            $table->string('image')->nullable();
            $table->string('uuid')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('elders');
    }
}
