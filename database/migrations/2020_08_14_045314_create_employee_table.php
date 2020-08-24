<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('father_name');

            $table->string('padrs');
            $table->string('pcity');
            $table->string('p_pin');

            $table->string('tadrs');
            $table->string('tcity');
            $table->string('t_pin');

            $table->string('dob');
            $table->string('c_no');
            $table->string('email');

            $table->string('gender');
            $table->string('dept');
            $table->string('deg');
            $table->string('blood_group');
            $table->string('edu_qua');

            $table->string('cert');

            $table->string('ani');
            $table->string('religion');
            $table->string('driving_linc');
            $table->string('voter_id');

            $table->string('adhaar');
            $table->string('matrial_status');

            $table->string('paymode');
            $table->string('acc_no');
            $table->string('PF_no');
            $table->string('PAN');
            $table->string('UAN_no');
            

            $table->string('photo');
            $table->string('resume');

            $table->string('doj');
            
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
