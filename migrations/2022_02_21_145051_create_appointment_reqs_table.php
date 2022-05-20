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
        Schema::create('appointment_reqs', function (Blueprint $table) {
           $table->bigIncrements('id'); //primary key

            $table->date('app_date'); //date of appointment 

            $table->bigInteger('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients'); //foreign key 

            $table->enum('request status', ['in progress', 'accepted', 'declined'])->nullable();

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
        Schema::dropIfExists('appointment_reqs');
    }
};
