<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\Destination;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;

class AdminLanguageController extends Controller
{
    public function index()
    {
        $languages = Language::get();
        return view('admin.languages.index', compact('languages'));
    }

    public function create()
    {
        return view('admin.languages.create');
    }

    public function store(StoreLanguageRequest $request)
    {
        Language::create($request->all());
        return to_route('admin.languages.index');
    }

    public function show(Language $language)
    {
        // dd($language->language_family);
    }

    public function edit(Language $language)
    {
        $destinations = Destination::get();
        return view('admin.languages.edit', compact('language', 'destinations'));
    }

    public function update(UpdateLanguageRequest $request, Language $language)
    {
        $language->destinations()->sync($request->get('destinations'));
        $language->fill($request->all())->save();
        return to_route('admin.languages.index');
    }

    public function destroy(Language $language)
    {
        $language->delete();
        return response()->json(['success'=> true]);
    }
}
