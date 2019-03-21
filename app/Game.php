<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class);
    }

    public function gameType() {
        return $this->belongsTo(GameType::class);
    }
}
