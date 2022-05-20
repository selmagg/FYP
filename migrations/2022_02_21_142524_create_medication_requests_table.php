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
        Schema::create('medication_requests', function (Blueprint $table) {
            $table->bigIncrements('id'); //primary key 

            $table->bigInteger('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients'); //foreignkey

            $table->bigInteger('med_id')->unsigned();
            $table->foreign('med_id')->references('id')->on('medications');
            
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
        Schema::dropIfExists('medication_requests');
    }
};
