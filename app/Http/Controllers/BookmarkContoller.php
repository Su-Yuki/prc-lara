<?php

namespace App\Http\Controllers;

use App\Bookmark;
use Illuminate\Http\Request;

class BookmarkContoller extends Controller
{
    //
    public function index()
    {
        $bookmarks = Bookmark::all();

        return view('bookmarks.index', compact('bookmarks'));
    }
}
