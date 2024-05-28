<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Resources\NewsResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class NewsController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return $this->sendResponse($news);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, String $slug)
    {
        $news = News::where('slug', $slug)->first();

        if (!$news) {
            return response()->json([
                'error' => true,
                'message' => 'News not found',
            ], 404);
        }

        $comments = $news->comments()->with('user')->get();
        $bookmarked = false;
        if ($request->user()) {
            $bookmarked = $request->user()->bookmarks()->where('news_id', $news->id)->exists();
        }
        $comments = $news->comments()->with('user')->get();
        return $this->sendResponse([
            'news' => $news,
            'comments' => $comments,
            'bookmarked' => $bookmarked,
        ]);
    }
}
