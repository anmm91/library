<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('upload')->with('categories',$categories);
    }

    public function upload(Request $request){
        //validate
        $rules=[
            'category_id'=>'required|exists:categories,id',
            'title'=>'required|max:20',
            'author'=>'required|max:20',
            'info'=>'required|max:80',
            'image'=>'required',
            'book'=>'required',
        ];
        $message=[
            'category_id.required'=>'plz choose the category',
            'category_id.exists'=>'this category not exists'
        ];
        $this->validate($request,$rules,$message);
        //upload & insert
            if($request->hasFile('image')){
                $imageExtension=$request->file('image')->getClientOriginalExtension();
                $imageName=time().'thuminal.'.$imageExtension;
                //upload to server
                $request->file('image')->storeAs('images',$imageName);
            }
        if($request->hasFile('book')){
            $bookExtension=$request->file('book')->getClientOriginalExtension();
            $bookName=time().'thuminal.'.$bookExtension;
            //upload to server
            $request->file('image')->storeAs('books',$bookName);
        }
        $book=new Book();
        $book->title=$request->input('title');
        $book->author=$request->input('author');
        $book->info=$request->input('info');
        $book->image=$imageName;
        $book->book=$bookName;
        $book->user_id=$request->user()->id;
        $book->category_id=$request->input('category_id');
        //save
        $book->save();
        //return
        return redirect()->route('upload')->with('success','upload ok');
    }
}
