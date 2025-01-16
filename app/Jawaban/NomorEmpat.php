<?php

namespace App\Jawaban;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Event;

class NomorEmpat
{
    public function getJson()
    {
        if (!Auth::check()) {
            return response()->json([]);
        }

        $loggedInUserId = Auth::id();

        $userEvents = Event::with('user')
            ->where('user_id', $loggedInUserId)
            ->get();

        $transformedData = $userEvents->map(function ($event) use ($loggedInUserId) {
            return [
                'id' => $event->id,
                'title' => $event->event_name . ' - ' . $event->user->name, 
                'start' => $event->start_time,
                'end' => $event->end_time,
                'color' => $event->user_id == $loggedInUserId ? 'blue' : 'gray', 
            ];
        });

        return response()->json($transformedData);
    }
}
