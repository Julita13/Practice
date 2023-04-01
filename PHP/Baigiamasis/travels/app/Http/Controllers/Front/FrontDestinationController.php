<?php

namespace App\Http\Controllers\Front;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontDestinationController extends Controller
{
   public function index(){
    $destinations = Destination::get();
    return view('front.destinations.index', compact('destinations'));
   }

   public function show(Destination $destination){
    return view('front.destinations.show', compact('destination'));
   }
}
