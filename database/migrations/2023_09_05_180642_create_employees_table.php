<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id()->autoIncrement();
            // basic details
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("email")->unique();
            $table->string("phone")->unique();
            $table->string("gender")->nullable();
            $table->string("age")->nullable();
            $table->text("address")->nullable();
            // degree details
            $table->string("degree")->nullable();
            $table->string("college")->nullable();
            $table->string("passout_year")->nullable();
            $table->string("score")->nullable();
            // job details
            $table->string("current_employer")->nullable();
            $table->string("job_profile")->nullable();
            $table->string("notice_peroid")->nullable();
            $table->string("salary")->nullable();
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
