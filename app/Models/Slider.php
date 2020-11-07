<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
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
        if(Arr::has($this->attributes, 'image')) {
            return Storage::url($this->attributes['image']);
        }
        return null;
    }
}
