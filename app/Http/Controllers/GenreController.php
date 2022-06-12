<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Genre;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Class GenreController
 * @package App\Http\Controllers
 */
class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $genres = Genre::orderBy('name')-> paginate();

        return view('genre.index', compact('genres'))
            ->with('i', (request()->input('page', 1) - 1) * $genres->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $genre = new Genre();
        return view('genre.create', compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        request()->validate(Genre::$rules);

        $genre = Genre::create($request->all());

        return redirect()->route('genres.index')
            ->with('success', 'Genre created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function show(Genre $genre)
    {
        return view('genre.show', ['genre' => $genre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $genre = Genre::find($id);

        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Genre $genre
     * @return RedirectResponse
     */
    public function update(Request $request, Genre $genre)
    {
        request()->validate(Genre::$rules);

        $genre->update($request->all());

        return redirect()->route('genres.index')
            ->with('success', 'Genre updated successfully');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre ->delete();
        return redirect()->route('genres.index')
            ->with('success', 'Genre deleted successfully');
    }
}
