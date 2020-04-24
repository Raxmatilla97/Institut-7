<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kafedralar extends Model
{

    protected $table = 'kafedralar';
    protected $fillable = [
        'name',
        'slug'
    ];
}
