<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('email')->unique();
			$table->integer('phone');
			$table->integer('experience');
			$table->integer('notice_period');
			$table->string('skill');
			$table->integer('job_location');
			$table->string('resume');
			$table->string('photo');
			$table->string('user_id');
			$table->string('status');
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
        Schema::dropIfExists('job_seekers');
    }
}
