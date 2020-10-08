<?php

namespace App\Models;

class Document extends BaseModel
{

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = ['title', 'url'];
}
