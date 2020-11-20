<?php


namespace App\Models;


use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class Event extends BaseModel
{
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'start_at',
        'end_at',
    ];

    protected $fillable = ['name', 'description', 'start_at', 'end_at', 'image', 'address', 'contact_button_url'];

    public function getImageAttribute()
    {
        if(Arr::has($this->attributes, 'image')) {
            return Storage::url($this->attributes['image']);
        }
        return null;
    }

}
