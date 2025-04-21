<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Support\Facades\Auth; 

class EventController extends Controller
{
    public function index() {
        return Event::with('venue', 'creator')->get();
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'venue_id' => 'required|exists:venues,id'
        ]);

        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
            'venue_id' => $request->venue_id,
            'created_by' =>Auth::id()
        ]);

        return response()->json($event);
    }
}
