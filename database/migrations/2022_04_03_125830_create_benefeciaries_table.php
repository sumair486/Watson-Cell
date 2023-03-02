<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenefeciariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefeciaries', function (Blueprint $table) {
            $table->id();
            $table->string('male');
            $table->string('female');
            $table->integer('number_of_total_men');
            $table->integer('number_of_total_women');
            $table->integer('number_of_disabled_beneficiaries');
            $table->string('challenges');
            $table->string('lesson_learnt');
            $table->string('name_of_reporting_person');
            $table->string('phone_no_reporting_person');
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
        Schema::dropIfExists('benefeciaries');
    }
}
