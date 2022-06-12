<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use App\Models\MediaType;
use App\Models\Track;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Class TrackController
 * @package App\Http\Controllers
 */
class TrackController extends Controller
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
            $tracks= Track::where('name', 'like', '%'.$key.'%')->paginate();
        }
        else
        {
            $tracks = Track::with('album', 'genre', 'mediaType')->orderBy('album_id')->paginate();
        }
        return view('track.index', compact('tracks'))
            ->with('i', (request()->input('page', 1) - 1) * $tracks->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
       return view ('track.create')
           ->with ('albums', Album::orderby('title','asc')->get(['id','title']))
           ->with ('artists', Artist::orderby('name','asc')->get(['id','name']))
           ->with ('genres', Genre::orderby('name','asc')->get(['id','name']))
           ->with ('mediaTypes', MediaType::orderby('name','asc')->get(['id','name']))
           ->with('track', new Track());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

        request()->validate(Track::$rules);

        $track = Track::create($request->all());

        return redirect()->route('tracks.index')
            ->with('success', 'Track created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function show(Track $track)
    {
        return view('track.show', ['track' => $track]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Track $track
     * @return Application|Factory|View
     */
    public function edit(Track $track)
    {
        return view ('track.edit')
            ->with ('albums', Album::orderby('title','asc')->get(['id','title']))
            ->with ('artists', Artist::orderby('name','asc')->get(['id','name']))
            ->with ('genres', Genre::orderby('name','asc')->get(['id','name']))
            ->with ('mediaTypes', MediaType::orderby('name','asc')->get(['id','name']))
            ->with('track', $track);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Track $track
     * @return RedirectResponse
     */
    public function update(Request $request, Track $track)
    {
        request()->validate(Track::$rules);

        $track->update($request->all());

        return redirect()->route('tracks.index')
            ->with('success', 'Track updated successfully');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $track = Track::findOrFail($id);
        $track->delete();
        return redirect()->route('tracks.index')
            ->with('success', 'Track deleted successfully');
    }
}
