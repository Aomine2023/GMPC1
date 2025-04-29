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
        Schema::table('user_investors', function (Blueprint $table) {
            $table->string('gender')->nullable()->after('phone');
            $table->date('dob')->nullable()->after('phone');
            $table->string('city')->nullable()->after('phone');
            $table->string('country')->nullable()->after('phone');
            $table->string('zipcode')->nullable()->after('phone');
            $table->mediumText('address')->nullable()->after('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_investors', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('gender');
            $table->dropColumn('dob');
            $table->dropColumn('city');
            $table->dropColumn('country');
            $table->dropColumn('zipcode');
            $table->dropColumn('address');
        });
    }
};