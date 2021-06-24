<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVisitorRequest;
use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    // public function index()
    // {

    // }

    // public function create()
    // {
    //     return view('events.show');
    // }

    public function store(StoreVisitorRequest $request)
    {
        Visitor::create($request->validated());

        return redirect()->route('events.index');
    }

    // public function show()
    // {

    // }

    // public function edit()
    // {

    // }

    // public function update()
    // {
     
    // }

    public function destroy()
    {

    }
}
