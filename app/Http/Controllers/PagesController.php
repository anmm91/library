<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $books=Book::latest()->paginate(5);
        return view('welcome',compact('books'));
    }
    public function viewCategory($id){
        $cat_id=Category::find($id);
        $books=$cat_id->books;
        return view('viewcategory')->with(['books'=>$books,'cat'=>$cat_id]);
    }
    public function categoryInfo($id){
        //data

        $book=Book::find($id);
        //return view
        return view('info',compact('book'));
    }

    public function comment(Request $request,$id){
        // validate
        $rules=['comment'=>'required'];
        $message=['comment.required'=>'plz enter your comment'];
        $this->validate($request,$rules,$message);
        //create
        $book=Book::findOrfail($id);
        $comment=new Comment();
        $comment->comment=$request->input('comment');
        $comment->user_id=$request->user()->id;
        $comment->book_id=$book->id;
        $comment->save();
        //return
        return redirect()->back()->with('success','your comment added successfully');

    }
}
