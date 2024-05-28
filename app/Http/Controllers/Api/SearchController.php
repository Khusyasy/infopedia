<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Resources\NewsResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class SearchController extends BaseController
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $news = News::where('title', 'like', "%$query%")->get();
        return $this->sendResponse($news);
    }
}
