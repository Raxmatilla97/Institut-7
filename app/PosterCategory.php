<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PosterCategory extends Model
{
    
    protected $fillable = [
        'name',
        'slug',
        'img'
    ];
}
