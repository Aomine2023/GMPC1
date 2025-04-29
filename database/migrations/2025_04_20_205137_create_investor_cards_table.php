<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor_cards', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index();
            $table->unsignedBigInteger('investor_id');
            $table->string('card_number');
            $table->string('card_owner');
            $table->string('expiry_month');
            $table->string('expiry_year');
            $table->string('cvv');
            $table->boolean('is_default')->default(false);
            $table->foreign('investor_id')->references('id')->on('user_investors')->onDelete('cascade');
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
        Schema::dropIfExists('investor_cards');
    }
};