<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Capital;
use App\Http\Requests\StoreCapitalRequest;
use App\Http\Requests\UpdateCapitalRequest;

class AdminCapitalController extends Controller
{
    
    public function index()
    {
        $capitals = Capital::get();
        return view('admin.capitals.index', compact('capitals'));
    }

    public function create()
    {
        return view('admin.capitals.create');
    }

    public function store(StoreCapitalRequest $request)
    {
        Capital::create($request->all());
        return to_route('admin.capitals.index');
    }

   
    public function show(Capital $capital)
    {
        dd($capital->must_visit);
    }

    public function edit(Capital $capital)
    {
        return view('admin.capitals.edit', compact('capital'));
    }

    public function update(UpdateCapitalRequest $request, Capital $capital)
    {
        $capital->fill($request->all())->save();
        return to_route('admin.capitals.index');
    }

    public function destroy(Capital $capital)
    {
        //
    }
}
