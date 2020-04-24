<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Kafedralar;
use App\PosterCategory;

class Poster extends Model
{

   
    
    protected $fillable = [
        'name',
        'slug',
        'slug',
        'desc',
        'category_id',
        'user_id',
        'kafedra_id',
        'active',
        'tasdiq'

    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(){
        return $this->belongsTo(PosterCategory::class, 'category_id');
    }

    public function kafedra(){
        return $this->belongsTo(Kafedralar::class, 'kafedra_id');
    }
}
