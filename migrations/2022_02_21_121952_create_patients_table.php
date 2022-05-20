<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id'); //primary key
            $table->bigInteger('user_id')->unsigned();
            //$table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->bigInteger('nhs_number')->unassigned(); 

        //    $table->bigInteger('surgery_id')->unsigned();
        //    $table->foreign('surgeries_id')->references('id')->on('surgeries'); //foreign key 

            $table->string('email')->unique(); //email 
            $table->timestamp('email_verified_at')->nullable();
            //$table->string('password'); //password

            $table->string('phone', 11);//phone number 
            $table->string('f_name', 30); //first name 
            $table->string('m_name', 30)->nullable(); //middle name 
            $table->string('l_name', 30); //last name
            $table->date('dob'); //date of brith
            $table->string('postcode', 6); //postcode

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users'); 
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
