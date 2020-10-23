<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    protected $fillable = [
       'caption',
       'action_url',
       'image'
    ];

    public function getImageAttribute()
    {
        return Storage::url($this->attributes['image']);
    }
}
