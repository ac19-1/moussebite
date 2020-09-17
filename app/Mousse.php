<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mousse extends Model
{
    protected $fillable = [
        'name',
        'price',
        'stock',
        'size_id',
        'image',
        'description'
    ];
}
