<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddcolumnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('gender')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('last_education')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('pas_photo')->nullable();
            $table->string('identity_card')->nullable();
            $table->string('roles')->default('USER');
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
            $table->dropColumn(['gender','place_of_birth','date_of_birth','last_education','phone','address','pas_photo','identity_card','roles']);
        });
    }
}
