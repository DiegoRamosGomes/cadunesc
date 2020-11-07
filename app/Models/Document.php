<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class Document extends BaseModel
{
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = ['title', 'url'];

    public function getUrlAttribute()
    {
        if(Arr::has($this->attributes, 'url')) {
            return Storage::url($this->attributes['url']);
        }
        return null;
    }
}
