<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('company');
            $table->string('job_levels');
            $table->string('job_title');
            $table->mediumText('short_description');
            $table->mediumText('phone');
            $table->mediumText('skills_requirements');
            $table->mediumText('highest_qualification');
            $table->mediumText('experience');
            $table->string('salary');
            $table->string('posted');
            $table->string('city');
            $table->string('user_id');
            $table->date('due_date');
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
        Schema::dropIfExists('jobs');
    }
}
