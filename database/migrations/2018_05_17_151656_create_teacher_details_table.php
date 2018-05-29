<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacherDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userId');
            $table->string('county');
            $table->string('tscNo');
            $table->string('school');
            $table->string('english')->nullable();
            $table->string('kiswahili')->nullable();
            $table->string('maths')->nullable();
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
        Schema::dropIfExists('teacherDetails');
    }
}
