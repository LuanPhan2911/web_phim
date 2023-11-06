<?php

namespace App\Http\Controllers;

use App\Enums\MovieResolution;
use App\Enums\MovieSubtitle;
use App\Enums\MovieTopView;
use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::with([
            'category',
            'genre',
            'country'
        ])->get();
        return view('admin.movie.index', [
            'movies' => $movies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id');
        $genres = Genre::pluck('title', 'id');
        $countries = Country::pluck('title', 'id');
        $resolution = MovieResolution::asSelectArray();
        $subtitle = MovieSubtitle::asSelectArray();
        return view('admin.movie.create', [
            'categories' => $categories,
            'genres' => $genres,
            'countries' => $countries,
            'resolution' => $resolution,
            'subtitle' => $subtitle
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'title',
            'description',
            'status',
            'genre_id',
            'country_id',
            'category_id',
            'english_title',
            'director',
            'publish_year',
            'resolution',
            'subtitle',
            'duration',
            'hashtags'
        ]);
        if ($request->hasFile('avatar')) {
            $path = Storage::disk("public")->put('movies', $request->file('avatar'));

            $data['avatar'] = $path;
        }

        Movie::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        $categories = Category::pluck('title', 'id');
        $genres = Genre::pluck('title', 'id');
        $countries = Country::pluck('title', 'id');
        $resolution = MovieResolution::asSelectArray();
        $subtitle = MovieSubtitle::asSelectArray();
        $top_views = MovieTopView::asSelectArray();

        return view(
            'admin.movie.edit',
            [
                'movie' => $movie,
                'categories' => $categories,
                'genres' => $genres,
                'countries' => $countries,
                'resolution' => $resolution,
                'subtitle' => $subtitle,
                'top_views' => $top_views
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $data = $request->only([
            'title',
            'description',
            'status',
            'genre_id',
            'country_id',
            'category_id',
            'is_hot',
            'english_title',
            'director',
            'publish_year',
            'resolution',
            'subtitle',
            'duration',
            'hashtags',
            'top_view'
        ]);
        if ($request->hasFile('avatar')) {
            $path = Storage::disk("public")->put('movies', $request->file('avatar'));

            $data['avatar'] = $path;
            if (isset($movie->avatar) && Storage::disk("public")->exists($movie->avatar)) {
                Storage::disk("public")->delete($movie->avatar);
            }
        }


        $movie->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $avatar = $movie->avatar;

        if (Storage::disk("public")->exists($avatar)) {

            Storage::disk("public")->delete($avatar);
        }
        $movie->delete();
        return redirect()->back();
    }
}
