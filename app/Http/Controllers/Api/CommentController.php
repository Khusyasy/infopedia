<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Resources\NewsResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class CommentController extends BaseController
{
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->content = $request->content;
        $comment->user_id = $request->user()->id;
        $comment->news_id = $request->news_id;
        $comment->save();
        return $this->sendResponse(null);
    }
}
