<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('father_name');
            $table->string('father_phone');
            $table->string('father_occupation');
            $table->string('mother_name');
            $table->string('mother_phone');
            $table->string('mother_occupation');
            $table->timestamps();
        });



        Schema::create('pupils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('address');
            $table->unsignedInteger('parents_id');
            $table->integer('school_fee');
            $table->timestamps();
            $table->foreign('parents_id')
            ->references('id')
                ->on('parents')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parents');
    }
}
