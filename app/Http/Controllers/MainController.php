<?php

namespace App\Http\Controllers;

use App\Exercise;
use App\Recipe;
use App\Body;
use App\Type;
use App\Difficulty;
use App\Generation;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function list_exercise()
    {
        $exercises = Exercise::all();
        $body = Body::all();
        $type = Type::all();
        $difficulty = Difficulty::all();
        $generation = Generation::all();
        $user = User::all();
        return view('exercises')
            ->with('exercises', $exercises)
            ->with('body', $body)
            ->with('type', $type)
            ->with('difficulty', $difficulty)
            ->with('generation', $generation)
            ->with('user', $user);

    }

    public function list_recipe()
    {
        $recipes = Recipe::all();
        return view('recipes')
            ->with('recipes', $recipes);

    }
}
