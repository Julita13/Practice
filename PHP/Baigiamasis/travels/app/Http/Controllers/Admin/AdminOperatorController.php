<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Operator;
use App\Http\Requests\StoreOperatorRequest;
use App\Http\Requests\UpdateOperatorRequest;

class AdminOperatorController extends Controller
{
    public function index()
    {
        $operators = Operator::with('destinations')->get();
        dd($operators[0]);
    }
    public function create()
    {
        dd("CREATE METHOD");
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOperatorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Operator $operator)
    {
        dd($operator->address);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Operator $operator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOperatorRequest $request, Operator $operator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Operator $operator)
    {
        //
    }
}
