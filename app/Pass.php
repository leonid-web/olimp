<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pass extends Model
{
    protected $fillable = [
        'fio', 'email', 'type', 'date_begin', 'date_end', 'quest', 'status', 'photo', 'prob'
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
