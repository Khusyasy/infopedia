<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Inertia\Response;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return inertia::render('Admin/News/Index', [
            'news' => News::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia::render('Admin/News/Form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->store('news', 'public');

        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->image = $image;
        $news->slug = $request->slug;
        $news->user_id = auth()->id();
        $news->save();

        return redirect()->route('news.index')->with('success', 'News created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::find($id);
        return inertia::render('Admin/News/Show', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::find($id);
        return inertia::render('Admin/News/Form', [
            'news' => $news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->content;
        if ($request->file('image')) {
            Storage::disk('public')->delete($news->image);
            $image = $request->file('image')->store('news', 'public');
            $news->image = $image;
        }
        $news->slug = $request->slug;
        $news->user_id = auth()->id();
        $news->save();

        return redirect()->route('news.index')->with('success', 'News updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);
        Storage::disk('public')->delete($news->image);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'News deleted successfully');
    }
}
