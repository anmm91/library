<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $rules=['name'=>'required|max:20'];
        $message=[
            'name.required'=>'plz enter the category',
            'name.max'=>'sorry the maximum character is 10'
        ];
        $this->validate($request,$rules,$message);

        // store data using create
        $category=Category::create($request->all());

        //return
        return redirect()->route('categories.index')->with('success','you added category successfully');
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
        return view('admin.edit',compact('category'));
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
        //validate
        $rules=['name'=>'required|max:20'];
        $message=[
            'name.required'=>'plz enter the category name',
            'name.max'=>'sorry the maximum character is 20'
        ];
        $this->validate($request,$rules,$message);
        //update
        $category=Category::find($id);
        $category->update($request->all());
        //return
        return redirect()->route('categories.index')->with('success','the category is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        Category::destroy($id);
        //return
        return redirect()->route('categories.index')->with('success','the category is deleted');
    }
}
