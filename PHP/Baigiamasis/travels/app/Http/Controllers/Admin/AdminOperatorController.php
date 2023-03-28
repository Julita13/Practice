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
        dd($operator->address);
    }

    public function edit(Operator $operator)
    {
        return view('admin.operators.edit', compact('operator'));
    }

    public function update(UpdateOperatorRequest $request, Operator $operator)
    {
        $operator->fill($request->all())->save();
        return to_route('admin.operators.index');
    }

    public function destroy(Operator $operator)
    {
        //
    }
}
