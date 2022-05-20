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
        Schema::create('covid_vac_infos', function (Blueprint $table) {
            $table->bigIncrements('id'); //primary key 

            $table->bigInteger('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients'); //foreignkey

            $table->string('vac_name', 30); //name of the vaccine 
            $table->date('date_taken'); //date the vaccine was taken
            $table->string('batch_no', 30); //vaccine batch number

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
        Schema::dropIfExists('covid_vac_infos');
    }
};
