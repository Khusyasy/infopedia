<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Inertia\Response;
use Inertia\Inertia;

class SearchController extends Controller
{
    public function index(Request $request): Response
    {
        $query = $request->input('query');
        $news = News::where('title', 'like', "%$query%")->get();
        return inertia::render('Search', [
            'news' => $news
        ]);
    }
    






    
}
