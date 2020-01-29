<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'name',
        'description',
        'front', 
        'back',
        'ring_id'
    ];
}
