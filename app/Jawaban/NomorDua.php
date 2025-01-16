<?php

namespace App\Jawaban;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Event;

class NomorDua {

	public function submit (Request $request) {

		$rules = $request->validate([
            'event' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date|after:start',
        ]);

		$newEvent = new Event();
        $newEvent->event_name = $rules['event'];
        $newEvent->start_time = $rules['start'];
        $newEvent->end_time = $rules['end'];
		$newEvent->user_id = Auth::id();
        $newEvent->save();
		
		return redirect()->route('event.home')->with('success', 'Schedule added successfully!');
	}
}
