<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban\NomorDua;
use App\Jawaban\NomorTiga;
use App\Jawaban\NomorEmpat;

class SchedulerController extends Controller {

    public function home () {

        $nomorTiga = new NomorTiga(); 
        $events = $nomorTiga->getData();

        return view('home.index', compact('events'));
    }

    public function submit(Request $request) {
        $scheduler = new NomorDua();
        return $scheduler->submit($request);
    }

    public function getJson() {
        $eventData = new NomorEmpat();
        return $eventData->getJson(); 
    }

    public function getSelectedData(Request $request) {
        $scheduler = new NomorTiga(); 
        return $scheduler->getSelectedData($request);
    }

    public function update(Request $request) {
        $scheduler = new NomorTiga();
        return $scheduler->update($request);
    }

    public function delete(Request $request) {
        $scheduler = new NomorTiga();
        return $scheduler->delete($request);
    }
}
