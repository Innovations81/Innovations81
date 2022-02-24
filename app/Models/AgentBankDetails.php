<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentBankDetails extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     *@var array
     */
    protected $fillable = [
        'user_id',
        'account_no', 
        'bank_name',
        'ifsc_code',
    ];
}
