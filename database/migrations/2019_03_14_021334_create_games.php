<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('What the game is called.');
            
            // Player requirements
            $table->unsignedSmallInteger('min_players')->default(1)->comment('the reccomended minimum amount of players who can play.');
            $table->unsignedSmallInteger('max_players')->nullable()->comment('The reccomended maximum amount of players who can play.');
            
            // Age requirements
            $table->unsignedSmallInteger('min_age')->default(1)->comment('The minimum age the player has to be before being allowed to play.');
            $table->unsignedSmallInteger('max_age')->nullable()->comment('The maximum age the player cannot exceed or they won\'t be allowed to play');
            
            // References {default 0 is usefull for error checking (you know an error occurred if it returns 0)}
            $table->bigInteger('game_type_id', false, true)->default(0)->comment('The game type, references game_types table\'s id.');
            $table->bigInteger('manufacturer_id', false, true)->default(0)->comment('The Manufacturer ID, references manufacturer\'s id.');
            
            // Timestamp
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
        Schema::dropIfExists('games');
    }
}
