<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ponger extends Model
{
    protected $fillable = ['first_name', 'last_name', 'city', 'state', 'age', 'height', 'swing_hand', 'win', 'loss' ];
}
