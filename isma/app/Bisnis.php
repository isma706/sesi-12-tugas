<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bisnis extends Model
{
    protected $fillable = [
        'title', 'text', 'image'
    ];
}
