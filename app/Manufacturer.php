<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    public function games() {
        return $this->hasMany(Game::class);
    }
}
