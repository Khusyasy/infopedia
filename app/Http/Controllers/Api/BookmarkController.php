<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Resources\NewsResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class BookmarkController extends BaseController
{
    public function store(
        Request $request,
        String $slug
    ) {
        $request->user()->bookmarks()->create([
            'news_id' => News::where('slug', $slug)->first()->id,
        ]);
        return $this->sendResponse(null);
    }

    public function destroy(
        Request $request,
        String $slug
    ) {
        $request->user()->bookmarks()->where('news_id', News::where('slug', $slug)->first()->id)->delete();
        return $this->sendResponse(null);
    }
}
