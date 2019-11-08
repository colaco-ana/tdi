<?php

namespace App\Http\Controllers;

use App\Body;
use App\Exercise;
use App\Recipe;
use App\Type;
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
        return view('exercises')
            ->with('exercises', $exercises);

    }

    public function list_recipe()
    {
        $recipes = Recipe::all();
        return view('recipes')
            ->with('recipes', $recipes);

    }

    public function list_type()
    {
        $types = Type::all();
        return view('types')
            ->with('types', $types);

    }

    public function list_body()
    {
        $bodies = Body::all();
        return view('bodies')
            ->with('bodies', $bodies);

    }

}
