<?php

namespace App\Http\Controllers;

use App\Exports\AlbumsExport;
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
use Maatwebsite\Excel\Excel;

/**
 * Class AlbumController
 * @package App\Http\Controllers
 */
class AlbumController extends Controller
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
            $albums= Album::where('title', 'like', '%'.$key.'%')->paginate();
        }
        else
        {
            $albums = Album::orderBy('title')->paginate();
        }
        return view('album.index', compact('albums'))
            ->with('i', (request()->input('page', 1) - 1) * $albums->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view ('album.create')
            ->with ('artists', Artist::orderby('name','asc')->get(['id','name']))
            ->with('album', new Album());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        request()->validate(Album::$rules);

        $album = Album::create($request->all());

        return redirect()->route('albums.index')
            ->with('success', 'Album created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param Album $album
     * @return Application|Factory|View
     */
    public function show(Album $album)
    {
        return view('album.show', ['album' => $album]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function edit(Album $album)
    {
        return view ('album.edit')
            ->with ('artists', Artist::orderby('name','asc')->get(['id','name']))
            ->with('album', $album);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Album $album
     * @return RedirectResponse
     */
    public function update(Request $request, Album $album)
    {
        request()->validate(Album::$rules);

        $album->update($request->all());

        return redirect()->route('albums.index')
            ->with('success', 'Album updated successfully');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        $album->tracks()->delete();
        $album->delete();
        return redirect()->route('albums.index')
            ->with('success', 'Album deleted successfully');
    }

    public function export()
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new AlbumsExport,'albums.xlsx');
    }
}
