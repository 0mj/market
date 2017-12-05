<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landscaper extends Model
{
    protected $fillable = ['first_name', 'last_name', 'city', 'state', 'age','height'];
}
