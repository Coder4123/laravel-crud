<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    public $timestamps=false;
    function setNameAttribute($value)
    {
        return $this->attributes['name']= 'Mr. '.$value;
    }
}
