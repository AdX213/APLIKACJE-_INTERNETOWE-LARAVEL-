<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $clubs = Club::all();
        return view('clubs.index', compact('clubs'));
    }

    public function create()
    {
        return view('clubs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
        ]);

        Club::create($request->all());

        return redirect()->route('clubs.index')->with('success', 'Club created successfully.');
    }

    public function show(Club $club)
    {
        return view('clubs.show', compact('club'));
    }

    public function edit(Club $club)
    {
        return view('clubs.edit', compact('club'));
    }

    public function update(Request $request, Club $club)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
        ]);

        $club->update($request->all());

        return redirect()->route('clubs.index')->with('success', 'Club updated successfully.');
    }

    public function destroy(Club $club)
    {
        $club->delete();
        return redirect()->route('clubs.index')->with('success', 'Club deleted successfully.');
    }
}
