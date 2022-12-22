<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
