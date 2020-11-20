<?php


namespace App\Models;


use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends BaseModel
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
    ];
}
