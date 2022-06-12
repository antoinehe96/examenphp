<?php
namespace App\Http\Controllers;
use App\Models\Artist;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function index()
    {
        return view('search.search');
    }

    public function search(Request $request)
    {
        if($request->has('search'))
        {
            $key=trim($request->search);
            $key=htmlentities($key);
            $artist= Artist::where('name', 'like', '%'.$key.'%')->get();
        }
    }
}
