<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithDrawRequest extends Model
{
    use HasFactory;

	protected $table = 'withdraw_requests';

	protected $fillable = [
        'user_id',
        'amount',
        'status',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}

?>
