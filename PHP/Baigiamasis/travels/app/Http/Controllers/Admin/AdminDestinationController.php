<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destination;
use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;
use App\Http\Controllers\Controller;

class AdminDestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::get();
        return view('admin.destinations.index', compact('destinations'));
    }

    public function create()
    {
        return view('admin.destinations.create');
    }

    public function store(StoreDestinationRequest $request)
    {
        Destination::create($request->all());
        return to_route('admin.destinations.index');
    }

    public function show(Destination $destination)
    {
        dd($destination->population);
    }

    public function edit(Destination $destination)
    {
        return view('admin.destinations.edit', compact('destination'));
    }

    
    public function update(UpdateDestinationRequest $request, Destination $destination)
    {
        $destination->fill($request->all())->save();
        return to_route('admin.destinations.index');
    }

    
    public function destroy(Destination $destination)
    {
        echo "DELETE";
    }
}
