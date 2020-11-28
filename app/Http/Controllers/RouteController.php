<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        $routes = Route::all();
        return view('routes', compact('routes'));
    }

    public function show(Route $route)
    {
        $photos = [];
        $route = Route::where('id', request()->id)->get()->toArray();
        if(!empty($route)) {
            $route = $route[0];
            $photos = Route::where('id', request()->id)->first()->albums()->get();
            if(!empty($photos) && !empty($photos[0])) {
                $photos = $photos[0]->photos()->get()->toArray();
            }
        }
        $testimonials = Testimonial::all()->toArray();
        return view('route', compact(['route', 'testimonials', 'photos']));
    }
}
