<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateODFStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_d_f_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('sustained');
            $table->string('revert');
            $table->string('reasons_in_case_of_revert');
            $table->integer('total_number_of_house_hold');
            $table->integer('total_population_of_village');
            $table->integer('number_of_laterine_in_village_during_tiggering');
            $table->integer('laterine_built_by_community');
            $table->integer('laterine_built_by_organization');
            $table->integer('number_of_targeted_schools');
            $table->string('school_name');
            $table->string('zero_star');
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
        Schema::dropIfExists('o_d_f_statuses');
    }
}
