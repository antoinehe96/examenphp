<?php

namespace App\Exports;

use App\Models\Album;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;

class AlbumsExport implements  FromView, ShouldAutoSize
{
    /**
    * @return View
    */

    public function view(): View
    {
        return view('exports.albums', ['albums' => Album::withCount('tracks')->get()]);
    }
}
