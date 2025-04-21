<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Venue;
use App\Http\Controllers\Controller;

class VenueController extends Controller
{
    public function index()
    {
        return response()->json(Venue::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
        ]);

        $venue = Venue::create($request->all());
        return response()->json($venue, 201);
    }

    public function show(Venue $venue)
    {
        return response()->json($venue);
    }

    public function update(Request $request, Venue $venue)
    {
        $request->validate([
            'name' => 'sometimes|string|max:255',
            'location' => 'sometimes|string|max:255',
            'capacity' => 'sometimes|integer|min:1',
        ]);

        $venue->update($request->all());
        return response()->json($venue);
    }

    public function destroy(Venue $venue)
    {
        $venue->delete();
        return response()->json(['message' => 'Venue deleted successfully']);
    }
}
