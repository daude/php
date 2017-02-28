<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as traitauthenticate;
use Illuminate\Contracts\Auth\Authenticatable as interfaceauthenticate;

class User extends Model implements interfaceauthenticate
{
    // protected $table='users';
    use traitauthenticate;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function post(){
        $this->hasMany(Post::class);
    }
}
