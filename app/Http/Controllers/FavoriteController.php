<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Auth::user()->funds; // Fetch the user's favorite funds.

        return view('favorites.index', ['favorites' => $favorites]);
    }

    public function addFavorite(Fund $fund)
    {
        Auth::user()->funds()->attach($fund->id); // Attach a Fund to the user's favorites.

        return redirect()->back()->with('success', 'Fund added to favorites');
    }

    public function removeFavorite(Fund $fund)
    {
        Auth::user()->funds()->detach($fund->id); // Detach a Fund from the user's favorites.

        return redirect()->back()->with('success', 'Fund removed from favorites');
    }
}
