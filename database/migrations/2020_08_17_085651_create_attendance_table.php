<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->date('date');
            $table->string('date_type');
            $table->time('in');
            $table->time('out');
            $table->time('lunch_out');
            $table->time('lunch_in');
            $table->time('tea_out');
            $table->time('tea_in');

            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')->on('employees')
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
        Schema::dropIfExists('attendances');
    }
}
