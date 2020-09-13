<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
       'caption',
       'action_url',
       'image'
    ];
}
