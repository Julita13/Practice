<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Front\FrontHomeController;
use App\Http\Controllers\Admin\AdminCapitalController;
use App\Http\Controllers\Admin\AdminLanguageController;
use App\Http\Controllers\Admin\AdminOperatorController;
use App\Http\Controllers\Admin\AdminDestinationController;
use App\Http\Controllers\Front\FrontDestinationController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');
    Route::resource('destinations', AdminDestinationController::class);
    Route::resource('capitals', AdminCapitalController::class);
    Route::resource('languages', AdminLanguageController::class);
    Route::resource('operators', AdminOperatorController::class);
});

Route::name('front.')->group(function () {
    Route::get('/', [FrontHomeController::class, 'index'])->name('home');
    Route::resource('destinations', FrontDestinationController::class)->only(['index', 'show']);
});