<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::published()->latest()->paginate(10);
        return view('image.index')->with('images', $images);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('image.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ImageRequest $request)
    {
        // dd($request->validated());
        Image::create($request->getData());
        return to_route('images.index')->with('message', "Image upload was successful");
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        // dd($image);
        return view('image.show')->with('image', $image);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        /*  $id = Auth::id();
        if ($id !== $image->user_id) {
            abort(403, 'Access denied');
        } */

        /* if (!Gate::allows('update-image', $image)) {
            abort(403);
        } */

        Gate::authorize('update-image  ', $image);

        return view('image.edit')->with('image', $image);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Image $image, ImageRequest $request)
    {
        $image->update($request->getData());
        // Image::where('id', $image)->update($request->getData());
        return to_route('images.index')->with('message', "Image update was successful");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        $id = Auth::id();
        if ($id !== $image->user_id) {
            abort(403, 'Access denied');
        }
        $image->delete();
        return to_route('images.index')->with('message', "Image delete was successful");
    }
}
