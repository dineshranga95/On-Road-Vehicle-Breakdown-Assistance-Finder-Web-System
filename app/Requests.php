<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Requests extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='requests';

    protected $fillable = [
        'user_id','is_requested', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
}
