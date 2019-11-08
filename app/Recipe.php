<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'image', 'preparation_mode', 'ingredients', 'portion', 'duration', 'gluten_free', 'lactose_free', 'vegan', 'vegetariano', 'paleo', 'difficulty_id'
    ];

    public function difficulty(){
        return $this->belongsTo('App\Difficulty', 'difficulty_id');
    }
}
