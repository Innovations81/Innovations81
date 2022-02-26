<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function gamesDetail(){
        return $this->belongsTo('App\Models\GamesDetail','games_detail_id');
    }

    public function gamesImage(){
        return $this->belongsTo('App\Models\GameImage','openTableId','table_id');
    }

}
