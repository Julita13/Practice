<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
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
        dd($language->language_family);
    }

    public function edit(Language $language)
    {
        return view('admin.languages.edit', compact('language'));
    }

    public function update(UpdateLanguageRequest $request, Language $language)
    {
        $language->fill($request->all())->save();
        return to_route('admin.languages.index');
    }

    public function destroy(Language $language)
    {
        
    }
}
