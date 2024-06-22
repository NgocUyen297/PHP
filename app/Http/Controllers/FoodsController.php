<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $food = Food::all();
        return view('foods.index',[
            'foods'=>$food
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('foods.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $generateNameImage = 'image'.time().'-'.$request->name.'.'.$request->image->extension();
        $request->image->move(public_path('images'), $generateNameImage);
        // $request->validate([
        //     'title'=>'required',
        //     'body'=>'required',
        // ] );
        $food = new Food();
        $food->title = $request->input('title');
        $food->body = $request->input('body');
        $food->category_id = $request->input('categories');
        $food->images = $generateNameImage;

        // // save to database
        $food->save();

        return redirect('/foods');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $food = Food::find($id);
        $category = Category::find($food->category_id);
        return view('foods.detail', [
            'food'=> $food,
            'category'=> $category,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $food = Food::find($id);
        return view('foods.edit')->with('food', $food);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $food = Food::where('id', $id)
        -> update(
            [
                'title'=> $request->input('title'),
                'body'=>$request->input('body')
            ]
        );

        return redirect('/foods');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $food = Food::find($id);
      $food->delete();
      return redirect('/foods');
    }
}
