<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Inertia\Response;
use Inertia\Inertia;

class SearchController extends Controller
{
    public function index(): Response
    {
        return inertia::render('Search', [
            'news' => News::all()
        ]);
    }






    
}
