<?php

namespace App\Http\Controllers;

use App\Models\Artifact;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
{
    $collections = Collection::all();
    return view('collections.index', compact('collections'));
}

public function create()
{
    return view('collections.create');
}

public function store(Request $request)
{
    Collection::create($request->all());
    return redirect('collections')->with('success', 'Collection created successfully.');
}

public function edit($id)
{
    $collection = Collection::findOrFail($id);
    return view('collections.edit', compact('collection'));
}

public function update(Request $request, $id)
{
    $collection = Collection::findOrFail($id);
    $collection->update($request->all());
    return redirect('collections')->with('success', 'Collection updated successfully.');
}

public function destroy($id)
{
    $collection = Collection::findOrFail($id);
    $collection->delete();
    return redirect('collections')->with('success', 'Collection deleted successfully.');
}
}
