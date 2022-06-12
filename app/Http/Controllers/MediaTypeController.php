<?php

namespace App\Http\Controllers;

use App\Models\MediaType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Class MediaTypeController
 * @package App\Http\Controllers
 */
class MediaTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $mediaTypes = MediaType::paginate();

        return view('media-type.index', compact('mediaTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $mediaTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $mediaType = new MediaType();
        return view('media-type.create', compact('mediaType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        request()->validate(MediaType::$rules);

        $mediaType = MediaType::create($request->all());

        return redirect()->route('media-types.index')
            ->with('success', 'MediaType created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $mediaType = MediaType::find($id);

        return view('media-type.show', compact('mediaType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $mediaType = MediaType::find($id);

        return view('media-type.edit', compact('mediaType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  MediaType $mediaType
     * @return RedirectResponse
     */
    public function update(Request $request, MediaType $mediaType)
    {
        request()->validate(MediaType::$rules);

        $mediaType->update($request->all());

        return redirect()->route('media-types.index')
            ->with('success', 'MediaType updated successfully');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mediaType = MediaType::findOrFail($id);
        $mediaType->delete();

        return redirect()->route('media-types.index')
            ->with('success', 'MediaType deleted successfully');
    }
}
