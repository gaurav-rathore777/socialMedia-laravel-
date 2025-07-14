<?php
// app/Http/Controllers/PamblateController.php

namespace App\Http\Controllers;

use App\Models\Pamblate;
use Illuminate\Http\Request;

class PamblateController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');

    $pamblates = Pamblate::when($search, function($query, $search) {
        return $query->where('title', 'like', "%{$search}%")
                     ->orWhere('content', 'like', "%{$search}%");
    })
    ->orderBy('created_at', 'desc')
    ->paginate(5); // 5 per page

    return view('pamblates.index', compact('pamblates', 'search'));
}

    public function create()
    {
        return view('pamblates.create');
    }

    public function store(Request $request)
    {
        Pamblate::create($request->all());
        return redirect()->route('pamblates.index');
    }

    public function show(Pamblate $pamblate)
    {
        return view('pamblates.show', compact('pamblate'));
    }

    public function edit(Pamblate $pamblate)
    {
        return view('pamblates.edit', compact('pamblate'));
    }

    public function update(Request $request, Pamblate $pamblate)
    {
        $pamblate->update($request->all());
        return redirect()->route('pamblates.index');
    }

    public function destroy(Pamblate $pamblate)
    {
        $pamblate->delete();
        return redirect()->route('pamblates.index');
    }
}
