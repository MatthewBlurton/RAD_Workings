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
            $table->string('manufacturer')->comment('The entity that creates the game.');
            $table->integer('type_id')->comment('The game type, references game_types table\'s id.');
            $table->integer('min_players')->comment('the reccomended minimum amount of players who can play.');
            $table->integer('max_players')->comment('The reccomended maximum amount of players who can play.');
            $table->integer('min_age')->comment('The minimum age the player has to be before being allowed to play.');
            $table->integer('max_age')->comment('The maximum age the player cannot exceed or they won\'t be allowed to play');
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
