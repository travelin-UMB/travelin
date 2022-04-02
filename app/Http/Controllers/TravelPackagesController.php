<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TravelPackageRequest;
use App\Models\Travel_packages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class TravelPackagesController extends Controller
{
    public function index()
    {
        $items = Travel_Packages::all();

        return view('pages.admin.travel-package.index',[
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('pages.admin.travel-package.create');
    }

    public function store(TravelPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Travel_Packages::create($data);
        return redirect()->route('travel-package.index');
    }

    public function edit($id)
    {
        $item = Travel_Packages::findOrFail($id);

        return view('pages.admin.travel-package.edit',[
            'item' => $item
        ]);
    }

    public function update(TravelPackageRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = Travel_Packages::findOrFail($id);

        $item->update($data);

        return redirect()->route('travel-package.index');
    }

    public function destroy($id)
    {
        $item = Travel_Packages::findOrFail($id);
        $item->delete();

        return redirect()->route('travel-package.index');
    }
}
