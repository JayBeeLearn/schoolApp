<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('parent_id');
            $table->unsignedInteger('pupil_id');
            $table->integer('amount');
            $table->string('payment_by');
            $table->date('date');
            $table->timestamps();
            $table->foreign('parent_id')
            ->references('id')
                ->on('parents')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('pupil_id')
            ->references('id')
                ->on('pupils')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
