<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitytypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activitytypes', function (Blueprint $table) {
            $table->id();
            $table->string('clts');
            $table->string('slts');
            $table->date('activity_start_date');
            $table->date('activity_end_date');
            $table->string('triggering');
            $table->string('declaration');
            $table->string('verification');
            $table->string('certification');
            $table->string('yes');
            $table->string('No');
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
        Schema::dropIfExists('activitytypes');
    }
}
