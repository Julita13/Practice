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
        dd($destinations);
        // dd($destinations[0]->languages);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd("CREATE METHOD");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDestinationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        dd($destination->population);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        dd($destination);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDestinationRequest $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
