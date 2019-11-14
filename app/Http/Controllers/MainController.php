<?php

namespace App\Http\Controllers;

use App\Body;
use App\Exercise;
use App\Recipe;
use App\Difficulty;
use App\Generation;
use App\Type;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ExerciseStoreRequest;
use App\Http\Requests\RecipeStoreRequest;
use App\Http\Requests\BodyStoreRequest;
use App\Http\Requests\TypeStoreRequest;
use Illuminate\Support\Facades\Auth;

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
        $user=Auth::user();
        if($user['role_id']=='1'){
            $types = Type::all();
            return view('types')
                ->with('types', $types);

        }elseif($user['role_id']==''){
            return redirect('/login');
        }else{
            return redirect('/home');

        }

    }

    public function list_body()
    {
        $user=Auth::user();
        if($user['role_id']=='1'){
            $bodies = Body::all();
            return view('bodies')
                ->with('bodies', $bodies);
        }elseif($user['role_id']==''){
            return redirect('/login');
        }else{
            return redirect('/home');

        }


    }


    public function form_exercise()
    {
        $exercises = Exercise::all();
        $bodies = Body::all();
        $types = Type::all();
        $recipes = Recipe::all();
        $difficulties = Difficulty::all();
        $generations = Generation::all();
        $users = User::all();
        return view ('insert_exercise')
            ->with('exercises', $exercises)
            ->with('bodies', $bodies)
            ->with('types', $types)
            ->with('recipes', $recipes)
            ->with('difficulties', $difficulties)
            ->with('generations', $generations)
            ->with('users', $users);
    }

    public function insert_exercise(ExerciseStoreRequest $request)
    {

        $data = $request->all();

        $file = $request->file('image')->store('images');

        $data['image'] = $file;

        Exercise::create($data);

        return redirect()->route('list_exercise');
    }

    public function form_recipe()
    {
        $recipes = Recipe::all();
        $difficulties = Difficulty::all();

        return view ('insert_recipe')
            ->with('recipes', $recipes)
            ->with('difficulties', $difficulties);
    }

    public function insert_recipe(RecipeStoreRequest $request)
    {

        $data = $request->all();

        $file = $request->file('image')->store('images');

        $data['image'] = $file;

        Recipe::create($data);

        return redirect()->route('list_recipe');
    }

    public function form_type()
    {
        $user=Auth::user();
        if($user['role_id']=='1'){
            $types = Type::all();
            return view ('insert_type')->with('types', $types);

        }elseif($user['role_id']==''){
            return redirect('/login');
        }else{
            return redirect('/home');

        }
        $types = Type::all();
        return view ('insert_type')->with('types', $types);
    }

    public function insert_type(TypeStoreRequest $request)
    {
        $user=Auth::user();
        if($user['role_id']=='1'){
            $data = $request->all();

            $file = $request->file('image')->store('images');

            $data['image'] = $file;

            Type::create($data);

            return redirect()->route('list_type');

        }elseif($user['role_id']==''){
            return redirect('/login');
        }else{
            return redirect('/home');

        }


    }

    public function form_body()
    {
        $user=Auth::user();
        if($user['role_id']=='1'){
            $bodies = Body::all();
            return view ('insert_body')->with('bodies', $bodies);

        }elseif($user['role_id']==''){
            return redirect('/login');
        }else{
            return redirect('/home');

        }

    }

    public function insert_body(BodyStoreRequest $request)
    {
        $user=Auth::user();
        if($user['role_id']=='1'){
            $data = $request->all();

            $file = $request->file('image')->store('images');

            $data['image'] = $file;

            Body::create($data);

            return redirect()->route('list_body');

        }elseif($user['role_id']==''){
            return redirect('/login');
        }else{
            return redirect('/home');

        }
    }

    public function edit_exercise(Exercise $id)
    {
        $user=Auth::user();
        if($user['role_id']=='1'){
            $exercises = Exercise::with('body', 'type', 'recipe', 'difficulty', 'generation', 'user')->where('id', $id->id)->get();
            $bodies = Body::all();
            $types = Type::all();
            $recipes = Recipe::all();
            $difficulties = Difficulty::all();
            $generations = Generation::all();
            $users = User::all();

            return view ('edit_exercise')
                ->with('exercises', $exercises)
                ->with('bodies', $bodies)
                ->with('types', $types)
                ->with('recipes', $recipes)
                ->with('difficulties', $difficulties)
                ->with('generations', $generations)
                ->with('users', $users);

        }elseif($user['role_id']==''){
            return redirect('/login');
        }else{
            return redirect('/home');

        }
    }

    public function update_exercise(ExerciseStoreRequest $request)
    {
        $user=Auth::user();
        if($user['role_id']=='1'){
            $data = $request->only(['id', 'name', 'description', 'image', 'duration', 'body_part_id', 'exercise_type_id', 'recipe_id', 'difficulty_id', 'generation_id', 'author_id']);

            if ($request->hasFile('image')){
                $file = $request->file('image')->store('images');
                $data['image'] = $file;
            }

            Exercise::where('id', $data['id'])->update($data);
            return redirect('/list_exercise');

        }elseif($user['role_id']==''){
            return redirect('/login');
        }else{
            return redirect('/home');

        }
    }
}
