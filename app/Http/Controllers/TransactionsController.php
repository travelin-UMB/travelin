<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionsController extends Controller
{
    public function index()
    {
        $items = Transactions::with([
            'details', 'travel_packages', 'user'
        ])->get();

        return view('pages.admin.transaction.index',[
            'items' => $items
        ]);
    }

    public function create()
    {
        //
    }

    public function store(TransactionRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Transactions::create($data);
        return redirect()->route('transaction.index');
    }

    public function show($id)
    {
        $item = Transactions::with([
            'details', 'travel_package', 'user'
        ])->findOrFail($id);

        return view('pages.admin.transaction.detail',[
            'item' => $item
        ]);
    }

    public function edit($id)
    {
        $item = Transactions::findOrFail($id);

        return view('pages.admin.transaction.edit',[
            'item' => $item
        ]);
    }

    public function update(TransactionRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = Transactions::findOrFail($id);

        $item->update($data);

        return redirect()->route('transaction.index');
    }

    public function destroy($id)
    {
        $item = Transactions::findOrFail($id);
        $item->delete();

        return redirect()->route('transaction.index');
    }
}
