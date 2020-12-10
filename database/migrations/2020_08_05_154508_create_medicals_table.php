<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicals', function (Blueprint $table) {
            // $table->bigIncrements('id');
            // $table->timestamps();

            $table->bigIncrements('id');
            // $table->unsignedBigInteger('department_id');
//            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->string('medical_name');
            $table->date('appointment_date');
            $table->boolean('isCompleted')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicals');
    }
}
