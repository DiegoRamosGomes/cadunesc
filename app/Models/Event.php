<?php


namespace App\Models;


class Event extends BaseModel
{
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'start_at',
        'end_at',
    ];

    protected $dateFormat = 'd/m/Y H:i:s';

    protected $casts = [
        'created_at' => 'datetime:d/m/Y H:i:s',
        'updated_at' => 'datetime:d/m/Y H:i:s',
        'deleted_at' => 'datetime:d/m/Y H:i:s',
        'start_at' => 'datetime:d/m/Y H:i:s',
        'end_at' => 'datetime:d/m/Y H:i:s',
    ];
}
