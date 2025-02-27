<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return Review::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'theme' => ['required'],
            'message' => ['required'],
        ]);

        return Review::create($data);
    }

    public function show(Review $review)
    {
        return $review;
    }

    public function update(Request $request, Review $review)
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'theme' => ['required'],
            'message' => ['required'],
        ]);

        $review->update($data);

        return $review;
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return response()->json();
    }
}
