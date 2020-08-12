<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->mediumText('firstname');
            $table->mediumText('secondname');
            $table->mediumText('lastname');
            $table->mediumText('age');
            $table->mediumText('number');
            $table->mediumText('address');
            $table->string('user_id');
            $table->mediumText('companyname');
            $table->mediumText('country');
            $table->mediumText('reference');
            $table->mediumText('purpose');
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
        Schema::dropIfExists('employers');
    }
}
