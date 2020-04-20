<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('periods', function (Blueprint $table) {  
             $table->increments('id');
        $table->string('title');
        $table->string('color');
        $table->date('start_date');
        $table->date('end_date');
        $table->integer('NO_Of_users'); 
        
         } ); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
