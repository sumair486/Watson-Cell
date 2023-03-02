<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('organization');
            $table->string('donor');
            $table->integer('number_of_targeted_villages');
            $table->string('district');
            $table->string('tehsil');
            $table->string('name_of_village_council');
            $table->string('name_of_village');
            $table->string('map_latitude');
            $table->string('map_longititude');
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
        Schema::dropIfExists('organizations');
    }
}
