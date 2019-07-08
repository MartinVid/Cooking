<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use DB;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::orderBy('created_at','desc')->paginate(4);
        return view('recipes.index')->with('recipes',$recipes);
    }

    public function categories()
    {
        return view('recipes.categories');
    }
    public function category1()
    {
        $recipes = Recipe::all()->where("category","=","breakfast");
        return view('recipes.category')->with('recipes',$recipes);
    }

    public function category2()
    {
        $recipes = Recipe::all()->where("category","=","lunch");
        return view('recipes.category')->with('recipes',$recipes);
    }

    public function category3()
    {
        $recipes = Recipe::all()->where("category","=","appetizers");
        return view('recipes.category')->with('recipes',$recipes);
    }
    public function category4()
    {
        $recipes = Recipe::all()->where("category","=","desserts");
        return view('recipes.category')->with('recipes',$recipes);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'description'=> 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $imageToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images',$imageToStore);
        }
        else{
            $imageToStore = 'noimg.jpg';
        }

        $post = new Recipe();
        $post->name = $request->input('title');
        $post->category = $request->input('category');
        $post->description = $request->input('description');
        $post->short_d = substr($request->input('description'),0,200);

        $post->picture = $imageToStore;
        $post->user_id = auth()->user()->id;
        $post->save();
        return redirect('/recipes')->with('success','Recipe Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);
        return view('recipes.show')->with('recipe',$recipe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        if(auth()->user()->id !== $recipe->user_id)
        {
            return redirect('/recipes')->with('error','Unauthorised User');
        }
        return view('recipes.edit')->with('recipe',$recipe);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $this->validate($request, [
            'title'=>'required',
            'description'=> 'required'
        ]);
        if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $imageToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images',$imageToStore);
        }

        $post = Recipe::find($id);
        $post->name = $request->input('title');
        if($request->hasFile('cover_image')){
            $post->picture = $imageToStore;
        }
        $post->category = $request->input('category');
        $post->description = $request->input('description');
        $post->short_d = substr($request->input('description'),0,200);
        $post->user_id = auth()->user()->id;
        $post->save();
        return redirect('/recipes')->with('success','Recipe Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Recipe::find($id);
        if(auth()->user()->id !== $post->user_id)
        {
            return redirect('/recipes')->with('error','Unauthorised User');
        }
        if($post->picture != 'noimg.jpg'){
            Storage::delete('public/cover_images/'.$post->picture);
        }
        $post->delete();
        return redirect('/recipes')->with('success','Recipe Deleted');
    }
}
