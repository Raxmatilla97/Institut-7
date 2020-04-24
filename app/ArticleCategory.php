<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    

    protected $fillable = [
            'name',
            'slug',
            'img',
            'active'
    ];
}
