<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryIndexController extends Controller
{
    
    public function __invoke()
    {
        $galleries = Gallery::orderBy('created_at' , 'desc')->paginate(12);
        return view('galleryIndex' , compact('galleries'));
    }
}
