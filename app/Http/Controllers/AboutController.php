<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use App\Models\FAQ;
use App\Models\Guide;
use App\Models\Route;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $counter = Counter::latest()->first();
        $guides = Guide::with('user')->get()->toArray();
        return view('about', compact('counter', 'guides'));
    }
}
