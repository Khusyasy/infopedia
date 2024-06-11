<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Resources\NewsResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\User;

class BookmarkController extends BaseController
{
    public function store(
        Request $request,
        String $slug
    ) {
        $userauth = $request->user();
        $user = User::find($userauth->id);
        $user->bookmarks()->create([
            'news_id' => News::where('slug', $slug)->first()->id,
        ]);
        return $this->sendResponse(null);
    }

    public function destroy(
        Request $request,
        String $slug
    ) {
        $userauth = $request->user();
        $user = User::find($userauth->id);
        $user->bookmarks()->where('news_id', News::where('slug', $slug)->first()->id)->delete();
        return $this->sendResponse(null);
    }
}
