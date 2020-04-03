<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Requests;


class Requests extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='requests';

    protected $fillable = [
        'user_id','mechanic_id','mechanic_email', 'address','required_service' ,'description','is_requested','is_accepted' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function mechanic()
    {
        return $this->belongsTo('Mechanic');
    }
   
}
