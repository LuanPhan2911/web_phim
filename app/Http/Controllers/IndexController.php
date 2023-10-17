<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Genre;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $genres = Genre::all();
        $countries = Country::all();
        return view('pages.home', compact('categories', 'genres', 'countries'));
    }
    public function category(Category $category)

    {
        $categories = Category::all();
        $genres = Genre::all();
        $countries = Country::all();
        return view('pages.category', compact('categories', 'genres', 'countries', 'category'));
    }
    public function genre(Genre $genre)
    {
        $categories = Category::all();
        $genres = Genre::all();
        $countries = Country::all();
        return view('pages.genre', compact('categories', 'genres', 'countries', 'genre'));
    }
    public function country(Country $country)
    {
        $categories = Category::all();
        $genres = Genre::all();
        $countries = Country::all();
        return view('pages.country', compact('categories', 'genres', 'countries', 'country'));
    }
    public function movie()
    {
        return view('pages.movie');
    }
    public function episode()
    {
        return view('pages.episode');
    }
    public function watch()
    {
        return view('pages.watch');
    }
}
