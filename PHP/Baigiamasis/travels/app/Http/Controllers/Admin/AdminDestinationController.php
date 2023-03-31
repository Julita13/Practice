<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\Operator;
use App\Models\Destination;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;

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
        Destination::customCreate($request);
        return to_route('admin.destinations.index');
    }

    public function show(Destination $destination)
    {
        // dd($destination->population);
    }

    public function edit(Destination $destination)
    {
        $languages = Language::get();
        $operators = Operator::get();
        return view('admin.destinations.edit', compact('destination', 'operators', 'languages'));
    }

    
    public function update(UpdateDestinationRequest $request, Destination $destination)
    {
        $destination->customUpdate($request);
        return to_route('admin.destinations.index');
    }

    
    public function destroy(Destination $destination)
    {
        $destination->delete();
        return response()->json(['success'=> true]);
    }
}
