<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::whereDate('date_from', '>', Carbon::today())
            ->with('route')
            ->with('guide')
            ->orderBy('date_from')
            ->get()
            ->toArray();
        return view('campaigns', compact('campaigns'));
    }
}
