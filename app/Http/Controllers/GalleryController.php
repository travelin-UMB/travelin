<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use App\Models\Travel_Packages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index()
    {
        $items = Gallery::with(['travel_packages'])->get();

        return view('pages.admin.gallery.index',[
            'items' => $items
        ]);
    }

    public function create()
    {
        $travel_packages = Travel_Packages::all();
        return view('pages.admin.gallery.create',[
            'travel_packages' => $travel_packages
        ]);
    }

    public function store(GalleryRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );
        
        Gallery::create($data);
        return redirect()->route('gallery.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = Gallery::findOrFail($id);
        $travel_packages = Travel_Packages::all();

        return view('pages.admin.gallery.edit',[
            'item' => $item,
            'travel_packages' => $travel_packages
        ]);
    }

    public function update(GalleryRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        $item = Gallery::findOrFail($id);

        $item->update($data);

        return redirect()->route('gallery.index');
    }

    public function destroy($id)
    {
        $item = Gallery::findOrFail($id);
        $item->delete();

        return redirect()->route('gallery.index');
    }
}
