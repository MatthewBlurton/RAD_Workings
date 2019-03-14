<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateManufacturers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('manufacturers', function (Blueprint $table) {
            $table->string('country',2)->comment('Which Country the Manufacturer is located at.');
            $table->string('website',320)->comment('The website associated with the Manufacturer.')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country');
        Schema::dropIfExists('website');
    }
}
