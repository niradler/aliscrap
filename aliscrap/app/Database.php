<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    protected $fillable = [
        'name',
        'host',
        'port',
        'username',
        'password',
        'user_id',
                ];
   
}
