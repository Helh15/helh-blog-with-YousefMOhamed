<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Article;
use App\Models\Comment;

class UserController extends Controller
{
    public function add_new_article(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'Article' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',

        ]);

        if ($request->hasfile('image') && $request->file('image')->isValid() ) {
           $image= $request->file('image')->store('images','public'); 
        }       
        
            Article::create([
                'user_id' => Auth::user()->id,
                'title' => $request->title,
                'category_id' => $request->category,
                'article' => $request->Article,
                'image' => $image,
            ]);


        session()->flash('success','The article has been add successfuly!');
        return view('auth.home'); 
    }

    public function add_comment(Request $request, $id)
    {

        $request->validate([
            'comment' => 'required',
        ]);

        Comment::create([
            'user_id' => Auth::user()->id,
            'article_id' => $id,
            'comment' => $request->comment,
        ]);


        session()->flash('success','The Comment has been add successfuly!');
        
        return redirect()->back(); 

    }
    
}
