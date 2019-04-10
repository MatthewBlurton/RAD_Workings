<?php

use Illuminate\Database\Seeder;

class Games extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'name' => 'Killer Bunnies',
            'manufacturer_id' => 5,
            'game_type_id' => 5,
            'min_age' => 12,
            'max_age' => null,
            'min_players' => 2,
            'max_players' => 8,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        // Matthew's Game data
        DB::table('games')->insert([
            'name' => 'DOOM',
            'manufacturer_id' => 9,
            'game_type_id' => 4,
            'min_age' => 15,
            'max_age' => null,
            'min_players' => 1,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
