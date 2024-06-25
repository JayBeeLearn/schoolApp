<?php

use App\Models\Parents;
use App\Models\Pupil;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePupilFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pupil_fees', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Parents::class);
            $table->foreignIdFor(Pupil::class);
            $table->integer('fees');
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
        Schema::dropIfExists('pupil_fees');
    }
}
