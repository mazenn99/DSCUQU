<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admins_id');
            $table->unsignedBigInteger('speaker_id');
            $table->string('title' , 50);
            $table->text('details');
            $table->text('picture');
            $table->string('slug');
            $table->unsignedTinyInteger('sex')->comment('1 => male , 2 => female , 3 => both');
            $table->unsignedTinyInteger('levels')->comment('1 => bigger , 2 => intermediate , 3 => Advanced ');
            $table->date('course_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->boolean('online')->comment('1 => online , 0 => offline');
            $table->unsignedBigInteger('type_courses_id');
            $table->unsignedBigInteger('collage_id');
            $table->boolean('status')->comment('1 => published , 0 => Unpublished');
            $table->boolean('certificate')->comment('1 => yes , 0 => no');
            $table->boolean('auto_registration')->comment('0 => waiting to admin approve , 1 => approve automatically');
            $table->string('maximum_attend')->nullable();
            $table->text('live_url')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
