<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ListImageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $images = Image::published()->latest()->paginate(10);
        return view('image-list')->with('images', $images);
    }
}
