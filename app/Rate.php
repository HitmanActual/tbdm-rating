<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Rate extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rate', 'comment','user_id','object_id','category_id',
    ];

}
