<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionUuid extends Model
{
    use HasFactory;
    protected $table = 'session_uuid';

    public function users(){
    	return $this->belongsToMany(User::class, 'users');
    }
}

?>