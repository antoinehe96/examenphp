<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Class ArtistController
 * @package App\Http\Controllers
 */
class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        if($request->has('search'))
        {
            $key=trim($request->search);
            $key=htmlentities($key);
            $artists= Artist::where('name', 'like', '%'.$key.'%')->paginate();
        }
        else
        {
            $artists = Artist::orderBy('name')-> paginate();
        }
        return view('artist.index', compact( 'artists'))
            ->with ('albums', Album::orderby('title','asc')->get(['id','title']))
            ->with('i', (request()->input('page', 1) - 1) * $artists->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $artist = new Artist();
        return view('artist.create', compact('artist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        request()->validate(Artist::$rules);

        $artist = Artist::create($request->all());

        return redirect()->route('artists.index')
            ->with('success', 'Artist created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function show(Artist $artist)
    {
        return view('artist.show', ['artist' => $artist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $artist = Artist::find($id);
        return view('artist.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Artist $artist
     * @return RedirectResponse
     */
    public function update(Request $request, Artist $artist)
    {
        request()->validate(Artist::$rules);

        $artist->update($request->all());

        return redirect()->route('artists.index')
            ->with('success', 'Artist updated successfully');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $artist = Artist::findOrFail($id);
        $artist->albums()->delete();
        $artist->delete();
        return redirect()->route('artists.index')
            ->with('success', 'Artist deleted successfully');

    }
}
