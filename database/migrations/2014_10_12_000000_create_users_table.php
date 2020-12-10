<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->bigIncrements('id');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            // $table->timestamps();

            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('lname')->nullable();
            $table->string('status')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('id_number')->nullable();
            $table->string('hall')->nullable();
            $table->string('program')->nullable();
            $table->string('department')->nullable();
            // $table->string('employee_number')->nullable();
            $table->string('dp')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            //            if user is inactive it will be 1
            $table->boolean('is_locked')->default(false);
            //            if user is suspended it will be 1
            $table->boolean('is_suspended')->default(false);
            //            if user is logged in it will be 1
            $table->boolean('is_login')->default(false);
            // $table->string('user_ip')->nullable();
            //            who created the user
//            $table->string('created_by',50)->nullable()->index();
            $table->unsignedInteger('password_attempt_count')->nullable();
            $table->dateTime('password_attempt_date')->nullable();
            $table->dateTime('last_login_date')->nullable();
            $table->boolean('must_change_password')->default(false);
            $table->string('token')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
