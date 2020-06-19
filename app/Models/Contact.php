<?php


namespace App\Models;


class Contact extends BaseModel
{
    protected $fillable = [
        'email',
        'subject',
        'text'
    ];
}
