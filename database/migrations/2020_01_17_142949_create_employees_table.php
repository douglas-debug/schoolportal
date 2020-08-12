<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->mediumText('address');
            $table->mediumText('objective');
            $table->mediumText('date');
            $table->mediumText('companyworked');
            $table->mediumText('designation');
            $table->mediumText('experience');
            $table->mediumText('aboutyou');
            $table->mediumText('institutename');
            $table->mediumText('highest_qualification');
            $table->string('Language');
            $table->string('rating')->nullable();
            $table->string('city');
            $table->string('user_id');
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
        Schema::dropIfExists('employees');
    }
}
