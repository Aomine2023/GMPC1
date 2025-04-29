<?php

declare(strict_types=1);

namespace App\Http\Controllers\Investors;

use App\Http\Controllers\Controller;
use App\Models\InvestorCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestorCardController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'card_number' => 'required|string|max:20',
            'card_owner' => 'required|string|max:255',
            'expiry_month' => 'required|string|max:2',
            'expiry_year' => 'required|string|max:2',
            'cvv' => 'required|string|max:4',
        ]);

        $investor = Auth::guard('investor')->user();

        // Optionally hash the card number and CVV for extra security (not required if you're tokenizing via a payment processor)
        $card = new InvestorCard();
        $card->investor_id = $investor->id;
        $card->card_number = $request->card_number;
        $card->card_owner = $request->card_owner;
        $card->expiry_month = $request->expiry_month;
        $card->expiry_year = $request->expiry_year;
        $card->cvv = $request->cvv;
        $card->is_default = $request->has('set_default');
        $card->save();

        return redirect()->back()->with('success', 'Card saved successfully.');
    }
}