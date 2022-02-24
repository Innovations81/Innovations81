<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLoginLog extends Model
{

     protected $fillable = [
        'id',
        'user_id',
        'ip',
        'device',
        'browser',
        'os',
    ];
    

    protected $table = 'user_login_logs';

     
}
