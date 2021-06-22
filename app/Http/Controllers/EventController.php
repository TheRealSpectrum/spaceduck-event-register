<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
>>>>>>> main
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class EventController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        return view('dashboard');
        // return "index called";
=======
        $events = Event::orderBy('id', 'desc')->paginate(20);

        return view('events.index', compact('events'));
>>>>>>> main
    }

    public function create()
    {
<<<<<<< HEAD
        // return view('');
        return "create called";
=======
        return view('events.create');
>>>>>>> main
    }

    public function store(StoreEventRequest $request)
    {
<<<<<<< HEAD
        // $request->validate([
        //     '' => 'required',
        //     '' => '',
        // ]);

        return "store called";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        // return view('');
        return "show called";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        // return view('');
        return "edit called";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        // $request->validate([
        //     '' => '',
        // ]);
        return "update called";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        return "destroy called";
=======
        Event::create($request->validated());

        return redirect()->route('events.index');
    }

    public function show(Event $event)
    {

        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {

        return view('events.edit', compact('event'));
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->update($request->validated());

        return redirect()->route('events.index');
    }

    public function destroy(Event $event)
    {

        $event->delete();

        return redirect()->route('events.index');
>>>>>>> main
    }
}