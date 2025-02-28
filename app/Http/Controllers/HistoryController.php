<?php
<?php

namespace App\Http\Controllers;

use App\Models\History; // Import the History model
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    // Show the form to create a new history entry
    public function create()
    {
        return view('backend.history.create'); // Adjust the path as necessary
    }

    // Store a new history entry
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'description' => 'required|string',
            // Add other fields as necessary
        ]);

        // Create a new history entry
        History::create([
            'description' => $request->description,
            // Add other fields as necessary
        ]);

        return redirect()->route('your-desired-route')->with('success', 'History added successfully!');
    }

    // Show a list of history entries (optional)
    public function index()
    {
        $histories = History::all(); // Fetch all history records
        return view('backend.history.index', compact('histories')); // Adjust the path as necessary
    }

    // Show the form to edit a specific history entry (optional)
    public function edit($id)
    {
        $history = History::findOrFail($id); // Find the history entry by ID
        return view('backend.history.edit', compact('history')); // Adjust the path as necessary
    }

    // Update a specific history entry (optional)
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'description' => 'required|string',
            // Add other fields as necessary
        ]);

        // Find the history entry and update it
        $history = History::findOrFail($id);
        $history->update([
            'description' => $request->description,
            // Add other fields as necessary
        ]);

        return redirect()->route('your-desired-route')->with('success', 'History updated successfully!');
    }

    // Delete a specific history entry (optional)
    public function destroy($id)
    {
        $history = History::findOrFail($id);
        $history->delete();

        return redirect()->route('your-desired-route')->with('success', 'History deleted successfully!');
    }
}