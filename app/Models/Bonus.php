<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    use HasFactory;

    protected $table = 'bonus';

    protected $fillable = [
        'user_id',
        'amount',
    ];

    public function users(){
    	return $this->belongsTo('App\Models\User','user_id');
    }
    
}
