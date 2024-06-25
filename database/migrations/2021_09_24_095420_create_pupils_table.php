<?php

use App\Models\Classes;
use App\Models\Parents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePupilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('pupils', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignIdFor(Parents::class);
            $table->string('first_name');
            $table->string('father_name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('address');
            $table->integer('school_fee');
            $table->foreignIdFor(Classes::class);
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
        Schema::dropIfExists('pupils');
    }
}
