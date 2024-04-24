<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;
use App\Models\News;

class UserNewsController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Home', [
            'news' => News::all(),
        ]);
    }

    public function show(String $slug): Response
    {
        $news = News::where('slug', $slug)->first();

        if (!$news) {
            abort(404);
        }
        if (auth()->check()) {
            return Inertia::render('News', [
                'news' => $news,
                'comments' => $news->comments()->with('user')->get(),
                'bookmarked' => auth()->user()->bookmarks()->where('news_id', $news->id)->exists(),
            ]);
        }
        return Inertia::render('News', [
            'news' => $news,
            'comments' => $news->comments()->with('user')->get(),
            'bookmarked' => false,
        ]);
    }
}
