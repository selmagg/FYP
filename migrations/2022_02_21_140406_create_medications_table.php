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
        Schema::create('medications', function (Blueprint $table) {
            $table->bigIncrements('id'); //primary key
            $table->enum('category', ['acute', 'repeat (current)', 'repeat (discontinued)'])->nullable(); //medication category 
            $table->string('medication_nanme', 30); //name of medication
            $table->date('date_issued'); //date medication was issued 
            $table->string('amount_prescribed', 30); //amount of medication to be taken 
            $table->string('dose_amount', 30); //amount given in prescription dose

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
        Schema::dropIfExists('medications');
    }
};


