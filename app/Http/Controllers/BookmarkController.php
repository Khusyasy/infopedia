<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\News;

class BookmarkController extends Controller
{
    public function index()
    {
        return Inertia::render('Bookmarks', [
            'news' => auth()->user()->bookmarks()->with('news')->get()->pluck('news')
        ]);
    }

    public function store(
        Request $request, String $slug) {

        auth()->user()->bookmarks()->create([
            'news_id' => News::where('slug', $slug)->first()->id,
        ]);

        return back();
    }

    public function destroy(
        Request $request, String $slug) {

        auth()->user()->bookmarks()->where('news_id', News::where('slug', $slug)->first()->id)->delete();

        return back();
    }
}
