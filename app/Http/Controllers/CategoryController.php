<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data['categories'] = Category::all();
        // //dd($data);
        // return view('backend.category.index',$data);      

    //    $Categories = Category::all();
    //     return view('backend.category.index',['categories'=>$Categories]);

    $categories = Category::all();
    return view('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        //$data['name'] = $request->name;
        //$data['description'] = $request->description;
        
        Category::create([
            'name'=> $request->name,
            'description'=> $request->description,
        ]);

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //option-1
        // $data['category']=$category;
        // return view('backend.category.show',$data);

        //option-2
        //return view('backend.category.show',['category=>$category']);

        //option-3
        return view('backend.category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
