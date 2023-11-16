<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Category;
use App\Models\Director;
use App\Models\Movie;

class MovieController extends Controller
{
    protected $movie;
    protected $category;
    protected $director;

    public function __construct(Movie $movie, Category $category, Director $director)
    {
        $this->movie = $movie;
        $this->category = $category;
        $this->director = $director;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = $this->movie->with('categories')->paginate(10);
        $data = [
            'movies' => $movies,
            'scripts' => [
                '/assets/js/admin/movie/index.js',
            ],
        ];

        return view('admin.movies.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->category->all();
        $directors = $this->director->all();

        $data = [
            'categories' => $categories,
            'directors' => $directors,
            'scripts' => [
                '/assets/js/admin/movie/index.js',
            ],
        ];

        return view('admin.movies.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        $validatedRequest = $request->validated();

        if ($request->hasFile('path_poster')) {
            $file = $request->file('path_poster');
            $name = $file->hashName();

            $file->storeAs('public/posters', $name);

            $validatedRequest['path_poster'] = $name;
        }

        $movie = $this->movie->create($validatedRequest);

        // Sincroniza as categorias
        if (isset($validatedRequest['category'])) {
            $movie->categories()->sync($validatedRequest['category']);
        }

        return redirect()->route('movies.index')->with('success', 'Filme Criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        $movie->with('categories');

        $data = [
            'movie' => $movie,
            'styles' => [
                '/assets/css/movie/show/index.css',
            ],
        ];

        return view('admin.movies.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        $categories = $this->category->all();
        $directors = $this->director->all();
        $movie->load('categories');
        $movieCategoryIds = $movie->categories->pluck('id')->toArray();
        $data = [
            'movie' => $movie,
            'categories' => $categories,
            'directors' => $directors,
            'movieCategoryIds' => $movieCategoryIds,
            'scripts' => [
                '/assets/js/admin/movie/index.js',
            ],
        ];

        return view('admin.movies.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $validatedRequest = $request->validated();

        if ($request->hasFile('path_poster')) {
            $file = $request->file('path_poster');
            $name = $file->hashName();

            $file->storeAs('public/posters', $name);

            $validatedRequest['path_poster'] = $name;
        }

        $movie->update($validatedRequest);

        // Sincroniza as categorias
        if (isset($validatedRequest['category'])) {
            $movie->categories()->sync($validatedRequest['category']);
        }

        return redirect()->route('movies.index')->with('success', 'Filme Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return response()->json(['success' => 'Filme deletado com sucesso!']);
    }
}
