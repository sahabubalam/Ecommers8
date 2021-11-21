<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Requests\CategoryFormRequest;
use App\Http\Requests\CategoryUpdateformRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::all();
        return view('category.category',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryFormRequest $request)
    {
       // dd($request->all());
        $image=$request->file('image')->store('/public/category');
        Category::create([
            'name'=>$request->name,
            'image'=>$image,
            'slug'=>Str::slug($request->name)
           
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateformRequest $request, $id)
    {
        $category=Category::find($id);
        if($request->hasFile('image')){
            Storage::delete($category->image);
            $image=$request->file('image')->store('/public/category');
            $category->update([
                'name'=>$request->name,
                'image'=>$image
            ]);
        }
        $category->update([
            'name'=>$request->name,

        ]);
        return redirect()->route('category.index')->with('message','Category Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        if(Storage::delete($category->image)){
            $category->delete();
        }
        else{
            $category->delete();
        }

        return back()->with('message','Category Deleted Succesfully');
    }
}
