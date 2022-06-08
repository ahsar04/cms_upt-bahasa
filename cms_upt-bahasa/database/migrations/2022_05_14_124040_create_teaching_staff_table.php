<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachingStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaching_staff', function (Blueprint $table) {
            $table->bigIncrements('id_teaching_staff');
            $table->string('nip', 25);
            $table->string('fullname', 50);
            $table->string('position', 20);
            $table->string('google_scholar', 30);
            $table->string('phone', 12);
            $table->string('email', 30);
            $table->string('address', 50);
            $table->string('facebook', 20);
            $table->string('instagram', 20);
            $table->string('picture', 30);
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
        Schema::dropIfExists('teaching_staff');
    }
}
