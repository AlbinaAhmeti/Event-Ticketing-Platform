<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 

class TicketController extends Controller
{
    public function index()
    {
        return response()->json(Ticket::with('event', 'user')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'price' => 'required|numeric|min:0',
            'seat_info' => 'required|string|max:255',
        ]);

        $ticket = Ticket::create([
            'user_id' => Auth::id(), // ose $request->user_id nëse je admin
            'event_id' => $request->event_id,
            'price' => $request->price,
            'seat_info' => $request->seat_info,
            'booking_time' => now(),
        ]);

        return response()->json($ticket, 201);
    }

    public function show(Ticket $ticket)
    {
        return response()->json($ticket);
    }

    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'price' => 'sometimes|numeric|min:0',
            'seat_info' => 'sometimes|string|max:255',
        ]);

        $ticket->update($request->all());
        return response()->json($ticket);
    }

    public function myBookings()
{
    $user = Auth::user();

    $bookings = Ticket::with('event')
        ->where('user_id', $user->id)
        ->orderBy('booking_time', 'asc')
        ->get();

    return response()->json($bookings);
}


    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return response()->json(['message' => 'Ticket deleted successfully']);
    }
}
