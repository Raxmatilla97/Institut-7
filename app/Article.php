<?php

namespace App;
use App\ArticleCategory;
use App\User;
use App\Kafedralar;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image',
        'active',
        'tasdiq',
        'description',
        'user_id',
        'category_id',
        'kafedra_id',
        'notes'
    ];

    public function category(){

        return $this->belongsTo(ArticleCategory::class, 'category_id');
    }

    public function users(){

        return $this->belongsTo(User::class, 'user_id');
    }

    public function kafedra(){

        return $this->belongsTo(Kafedralar::class, 'kafedra_id');
    }
}
