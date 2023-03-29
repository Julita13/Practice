<?php

namespace App\Http\Controllers\Admin;

use App\Models\Operator;
use App\Models\Destination;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOperatorRequest;
use App\Http\Requests\UpdateOperatorRequest;

class AdminOperatorController extends Controller
{
    public function index()
    {
        $operators = Operator::get();
        return view('admin.operators.index', compact('operators'));
    }
    public function create()
    {
        return view('admin.operators.create');
    }
 
    public function store(StoreOperatorRequest $request)
    {
        Operator::create($request->all());
        return to_route('admin.operators.index');
    }
    public function show(Operator $operator)
    {
        // dd($operator->address);
    }

    public function edit(Operator $operator)
    {
        $destinations = Destination::get();
        return view('admin.operators.edit', compact('operator', 'destinations'));
    }

    public function update(UpdateOperatorRequest $request, Operator $operator)
    {
        $operator->destinations()->sync($request->get('destinations'));
        $operator->fill($request->all())->save();
        return to_route('admin.operators.index');
    }

    public function destroy(Operator $operator)
    {
        $operator->delete();
        return response()->json(['success'=> true]);
    }
}
