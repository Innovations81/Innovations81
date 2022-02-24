<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_type_id',
        'game_id',
        'user_id',
        'session_id',
        'balance',
        'transaction_id',
        'debit_transaction_id',
        'reverse_transaction_id',
        'type',
        'amount',
        'round_id',
        'table_id',
        'request_log_id',
        'timestamp',
        'is_ezugi_bet',
        'placed_at',
        'settled_at',
        'entry_type',
        'seat_id',
        'ezugi_game_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function game(){
        return $this->belongsTo('App\Models\Game');
    }

    public function gametype(){
        return $this->belongsTo('App\Models\GameTypes','game_type_id');
    }
}
