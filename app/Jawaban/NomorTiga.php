<?php

namespace App\Jawaban;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Event;

class NomorTiga {

    public function getData() {
        
        $eventList = Event::where('user_id', Auth::id())->get();
        return $eventList;
    }

    public function getSelectedData(Request $request) {
        $request->validate([
            'id' => 'required|exists:events,id'
        ]);

        $selectedEvent = Event::where('id', $request->id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        return response()->json($selectedEvent);
    }

    public function update(Request $request) {
        $validatedData = $request->validate([
            'id' => 'required|exists:events,id',
            'event' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date|after:start',
        ]);

        $eventToUpdate = Event::where('id', $validatedData['id'])
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $eventToUpdate->event_name = $validatedData['event'];
        $eventToUpdate->start_time = $validatedData['start'];
        $eventToUpdate->end_time = $validatedData['end'];
        $eventToUpdate->save();

        return redirect()->route('event.home')->with('Success', 'Event berhasil di update!');
    }

    public function delete(Request $request) {
        $request->validate([
            'id' => 'required|exists:events,id'
        ]);

        $eventToDelete = Event::where('id', $request->id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $eventToDelete->delete();

        return redirect()->route('event.home')->with('Success', 'Event berhasil di delete!');
    }
}
   