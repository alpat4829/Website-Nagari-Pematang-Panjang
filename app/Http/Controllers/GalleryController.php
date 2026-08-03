<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(20);
        return view('gallery.index', compact('galleries'));
    }

    public function show(Gallery $gallery)
    {
        return view('gallery.show', compact('gallery'));
    }
}
