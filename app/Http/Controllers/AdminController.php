<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class AdminController extends Controller
{
    public function liked_article($id)
    {
        $liked_article=Article::find($id);

        $liked_article->update([
            'state' => '1',
            'reviewed' => 0,
        ]);

        session()->flash('success','The Article has been published');
        return redirect()->back();

           
    }

    public function disliked($id)
    {
     
        $disliked_article=Article::find($id);

        $disliked_article->update([
            'state' => 0,
            'reviewed' => '1',
        ]);

        session()->flash('success','The Article has been deleted');
        return redirect()->back();

           
    }


}
