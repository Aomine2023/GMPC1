<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
{
    $community = Community::all();
    $participants = Participant::all(); // This should include chaplains
    $chaplains = Chaplian::all(); // Ensure you are fetching the chaplains correctly

    return view('website.layouts.index', compact('community', 'participants', 'chaplains'));
}
}

