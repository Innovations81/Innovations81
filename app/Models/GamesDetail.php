<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamesDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'game_type_id'
    ];

    protected $table = 'games_detail';
}
