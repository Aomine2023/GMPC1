<?php

declare(strict_types=1);

namespace App\Http\Controllers\Investors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestorFaqsController extends Controller
{
    public function investor_faqs()
    {
        // Pass user and investor data to the view
        return view('backend.investors_layouts.faqs');
    }
}