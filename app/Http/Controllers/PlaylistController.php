<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Playlist;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Class PlaylistController
 * @package App\Http\Controllers
 */
class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $playlists = Playlist::orderBy('name')-> paginate();

        return view('playlist.index', compact('playlists'))
            ->with('i', (request()->input('page', 1) - 1) * $playlists->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $playlist = new Playlist();
        return view('playlist.create', compact('playlist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        request()->validate(Playlist::$rules);

        $playlist = Playlist::create($request->all());

        return redirect()->route('playlists.index')
            ->with('success', 'Playlist created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function show(Playlist $playlist)
    {
        return view('playlist.show', ['playlist' => $playlist]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $playlist = Playlist::find($id);

        return view('playlist.edit', compact('playlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Playlist $playlist
     * @return RedirectResponse
     */
    public function update(Request $request, Playlist $playlist)
    {
        request()->validate(Playlist::$rules);

        $playlist->update($request->all());

        return redirect()->route('playlists.index')
            ->with('success', 'Playlist updated successfully');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->playlistTrack()->delete();
        $playlist->delete();

        return redirect()->route('playlists.index')
            ->with('success', 'Playlist deleted successfully');
    }
}
