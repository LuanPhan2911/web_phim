<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function __construct()
    {

        $categories = Category::with([
            'movies'
        ])
            ->whereHas("movies", function ($q) {
                return $q->latest("updated_at");
            })
            ->orderBy("position", "ASC")->get();
        $genres = Genre::all();
        $countries = Country::all();
        $trending_movies = Movie::where("is_hot", 1)->latest()->take(10)->get();

        $publishes = Movie::groupBy("publish_year")->orderBy("publish_year", "DESC")->pluck('publish_year');
        view()->share(compact('categories', 'genres', 'countries', 'publishes', 'trending_movies'));
    }
    public function home()
    {
        $hot_movies = Movie::where("is_hot", 1)->latest("updated_at")->get();
        return view('pages.home', compact('hot_movies'));
    }
    public function category(Category $category)

    {

        $movies = Movie::where('category_id', $category->id)->latest("updated_at")->paginate();
        return view('pages.category', compact('category', 'movies'));
    }
    public function genre(Genre $genre)
    {

        $movies = Movie::where('genre_id', $genre->id)->latest("updated_at")->paginate();
        return view('pages.genre', compact('genre', 'movies'));
    }
    public function country(Country $country)
    {

        $movies = Movie::where('country_id', $country->id)->latest("updated_at")->paginate();
        return view('pages.country', compact('country', 'movies'));
    }
    public function movie(Movie $movie)
    {


        $movie->load([
            'category',
            'genre',
            'country'
        ]);

        $related_movies = Movie::where('category_id', $movie->category_id)
            ->latest("updated_at")
            ->get();

        return view('pages.movie', compact(['movie', 'related_movies']));
    }
    public function publish($year)
    {
        $movies = Movie::where('publish_year', $year)->latest("updated_at")->paginate();
        return view('pages.publish', compact('year', 'movies'));
    }
    public function hashtag($tag)
    {
        $movies = Movie::where('hashtags', "like", "%" . $tag . "%")->latest("updated_at")->paginate();
        return view('pages.hashtag', compact('tag', 'movies'));
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
