<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role() {
        return $this->hasOne('App\Models\Role','id','role_id');
    }

    public function getDocuments() {
        return $this->hasMany('App\Models\UsersDocument','user_id');
    }

    public function isAdmin(){
        return $this->role->name;
    }

    public function isDocUploaded(){

        $data  = $this->has('getDocuments')->with('getDocuments')->where('id',Auth::id())->first();
        $is_uploaded = ($data == '') ? 0 : 1;
        return  $is_uploaded ;
    }


}

?>
