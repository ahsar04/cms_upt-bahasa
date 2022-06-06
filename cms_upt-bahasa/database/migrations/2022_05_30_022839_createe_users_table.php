<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('gender');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('last_education');
            $table->string('phone');
            $table->string('address');
            $table->string('pas_photo');
            $table->string('identity_card');
            $table->string('role')->default('USER');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('gender');
            $table->dropColumn('place_of_birth');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('last_education');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('pas_photo');
            $table->dropColumn('identity_card');
            $table->dropColumn('role');
        });
    }
}
