<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return News::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'date' => ['required', 'date'],
            'description' => ['nullable'],
            'photo' => ['nullable'],
            'links' => ['nullable'],
        ]);

        return News::create($data);
    }

    public function show(News $news)
    {
        return $news;
    }

    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title' => ['required'],
            'date' => ['required', 'date'],
            'description' => ['nullable'],
            'photo' => ['nullable'],
            'links' => ['nullable'],
        ]);

        $news->update($data);

        return $news;
    }

    public function destroy(News $news)
    {
        $news->delete();

        return response()->json();
    }
}
