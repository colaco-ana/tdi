<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercise extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'image', 'duration', 'body_part_id', 'exercise_type_id', 'recipe_id', 'difficulty_id', 'generation_id', 'author_id', 'review'
    ];

    public function body(){
        return $this->belongsTo('App\Body', 'body_part_id');
    }

    public function exercise(){
        return $this->belongsTo('App\Exercise', 'exercise_type_id');
    }

    public function recipe(){
        return $this->belongsTo('App\Recipe', 'recipe_id');
    }

    public function difficulty(){
        return $this->belongsTo('App\Difficulty', 'difficulty_id');
    }

    public function generation(){
        return $this->belongsTo('App\Generation', 'generation_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'author_id');
    }
}
