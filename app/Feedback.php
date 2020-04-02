<?php

namespace App;
use App\Feedback;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table='feedback';

    protected $fillable = [
        'request_id' ,'description',
    ];

}
