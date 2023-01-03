<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\category;

class ViewsController extends Controller
{
   public function photography()
   {


        return view('photography');

   }
    public function travel()
    {


    return view('travel');

           
    }
    public function fashion()
    {


    return view('fashion');

           
    }
    public function about()
    {


        return view('about');


    }
    public function contact()
    {


    return view('contact');

           
    }
    public function readmore($id)
    {

  $articles=Article::where('id',$id)->get() ;

    return view('readmore',compact('articles'));

           
    }
    public function categoryindex($id)
    {
     $categoryarticles= Article::where('category_id',$id)->get();

    return view('categoryindex',compact('categoryarticles'));

           
    }
    public function aboutauther($id)
    {
    
    $autherarticles= Article::where('user_id',$id)->get();

    return view('aboutauther',compact('autherarticles'));

           
    }
    
}
