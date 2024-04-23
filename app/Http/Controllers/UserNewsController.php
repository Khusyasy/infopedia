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
        return Inertia::render('News', [
            'news' => News::where('slug', $slug)->first(),
            'comments' => News::where('slug', $slug)->first()->comments()->with('user')->get(),
            
        ]);
    }

}

