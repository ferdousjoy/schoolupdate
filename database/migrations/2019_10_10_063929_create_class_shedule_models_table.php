<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassSheduleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_shedule_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tteacher');
            $table->string('class_name');
            $table->string('detail');
            $table->string('time_head'); 
            
            $table->string('starttime');
            $table->string('endtime');
            $table->string('size_head');
            
            
            $table->string('size');
            $table->string('ageHead');
            $table->string('agerange');
            $table->string('feeHead');
            $table->string('feeAmount');
            
            $table->string('pic');
            
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
        Schema::dropIfExists('class_shedule_models');
    }
}
