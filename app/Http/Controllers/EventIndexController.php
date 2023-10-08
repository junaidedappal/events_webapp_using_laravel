<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $events = Event::with('country' , 'tags' )->orderBy('created_at' , 'desc')->paginate(12);
        return view('eventIndex' , compact('events'));
    }
}
