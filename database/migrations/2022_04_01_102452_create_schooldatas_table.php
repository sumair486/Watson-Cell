<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchooldatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schooldatas', function (Blueprint $table) {
            $table->id();
            $table->string('one_star');
            $table->string('two_star');
            $table->string('four_star');
            $table->string('yes');
            $table->string('no');
            $table->string('functional');
            $table->string('non_functional');
            $table->string('reasons_in_case_of_non_functionality');
            $table->integer('number_of_total_beneficiaries');
            $table->string('male');
            $table->string('female');
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
        Schema::dropIfExists('schooldatas');
    }
}
