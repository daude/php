<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Contracts\Auth\Authenticatable as authenticate;
use  Illuminate\Auth\Authenticatable;

class Admin extends Model implements authenticate
{
    protected $table='users';
    use Authenticatable;
}
