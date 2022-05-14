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
            $table->text('nip');
            $table->text('fullname');
            $table->text('position');
            $table->text('google_scholar');
            $table->text('phone');
            $table->text('email');
            $table->text('address');
            $table->text('facebook');
            $table->text('instagram');
            $table->text('picture');
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
