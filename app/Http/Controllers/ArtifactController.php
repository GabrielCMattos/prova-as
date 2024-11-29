<?php

namespace App\Http\Controllers;

use App\Models\Artifact;
use App\Models\Collection;
use Illuminate\Http\Request;

class ArtifactController extends Controller
{
    public function index()
{
    $artifacts = Artifact::simplePaginate(8);
    return view('artifacts.index', compact('artifacts'));
}

public function create()
{
    $collections = Collection::all();
    return view('artifacts.create', compact('collections'));
}

public function store(Request $request)
{
    $image = $request->file("image")->store("images", "public");
    $artifacts = Artifact::create([
        "collection_id"=>$request->collection_id,
        "name"=>$request->name,
        "value"=>$request->value,
        "age"=>$request->age,
        "image"=>$image
    ]);
    return redirect('artifacts')->with('success', 'Artifact created successfully.');
}

public function edit($id)
{
    $artifact = Artifact::findOrFail($id);
    $collections = Collection::all();
    return view('artifacts.edit', compact('artifact'), compact('collections'));
}

public function update(Request $request, $id)
{
    $artifact = Artifact::findOrFail($id);
    $image = $request->file("image")->store("images", "public");
    $artifact = $artifact->update([
        "collection_id"=>$request->collection_id,
        "name"=>$request->name,
        "value"=>$request->value,
        "age"=>$request->age,
        "image"=>$image
    ]);
    return redirect('artifacts')->with('success', 'Artifact updated successfully.');
}

public function destroy($id)
{
    $artifact = Artifact::findOrFail($id);
    $artifact->delete();
    return redirect('artifacts')->with('success', 'Artifact deleted successfully.');
}
}
