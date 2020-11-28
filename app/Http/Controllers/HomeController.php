<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use App\Models\FAQ;
use App\Models\Route;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $routes = Route::all()->toArray();
        $testimonails = Testimonial::all()->toArray();
        $faqs = FAQ::all()->toArray();
        $counter = Counter::latest()->first();
        return view('home', compact('routes', 'testimonails', 'faqs', 'counter'));
    }
}
