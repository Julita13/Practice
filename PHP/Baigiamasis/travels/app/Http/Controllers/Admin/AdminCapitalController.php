<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Capital;
use App\Http\Requests\StoreCapitalRequest;
use App\Http\Requests\UpdateCapitalRequest;

class AdminCapitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $capitals = Capital::get();
        dd($capitals);
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
    public function store(StoreCapitalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Capital $capital)
    {
        dd($capital->must_visit);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Capital $capital)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCapitalRequest $request, Capital $capital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Capital $capital)
    {
        //
    }
}
