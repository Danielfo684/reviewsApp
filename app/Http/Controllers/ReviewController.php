<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 
    public function index(Request $request)
    {
        $reviews = Review::where('book_id', $request->id)->get();
       
        $reviews = $reviews->map(function ($review) {
        return [
            'id' => $review->id,
            'user_id' => $review->user_id,
            'user_name' => $review->user->name, // Include the user's name
            'book_id' => $review->book_id,
            'rating' => $review->rating,
            'review' => $review->review,
            'created_at' => $review->created_at,
            'updated_at' => $review->updated_at,
        ];
    });

    return response()->json([
        'reviews' => $reviews,
    ]);
}
    

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|bigInteger',
            'book_id' => 'required|bigInteger',
            'rating' => 'required|integer|min:0|max:5',
            'review' => 'required|max:1000'
                ]);

        $review = Review::create([
            'user_id' => Auth::id(),
            'book_id' => $request->book_id,
            'rating' => $request->rating,
            'review' => $request->review
        ]);
        return response()->json([
            'message' => 'Review successfully created',
            'review' => $review
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
