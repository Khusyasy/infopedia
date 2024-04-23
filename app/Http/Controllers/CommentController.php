<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    //create show comment in news feed
        
    
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->content = $request->content;
        $comment->user_id = auth()->id();
        $comment->news_id = $request->news_id;
        $comment->save();
        return redirect()->route('unews',$request->slug);
    }
}
