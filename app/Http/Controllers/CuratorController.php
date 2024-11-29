<?php

namespace App\Http\Controllers;

use App\Models\Curator;
use Illuminate\Http\Request;

class CuratorController extends Controller
{
    public function index()
{
    $curators = Curator::all();
    return view('curators.index', compact('curators'));
}

public function create()
{
    return view('curators.create');
}

public function store(Request $request)
{
    Curator::create($request->all());
    return redirect('curators')->with('success', 'Curator created successfully.');
}

public function edit($id)
{
    $curator = Curator::findOrFail($id);
    return view('curators.edit', compact('curator'));
}

public function update(Request $request, $id)
{
    $curator = Curator::findOrFail($id);
    $curator->update($request->all());
    return redirect('curators')->with('success', 'Curator updated successfully.');
}

public function destroy($id)
{
    $curator = Curator::findOrFail($id);
    $curator->delete();
    return redirect('curators')->with('success', 'Curator deleted successfully.');
}
}
