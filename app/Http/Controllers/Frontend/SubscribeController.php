<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            // 'name'  => 'required|string|max:100',
            'email' => 'required|email|unique:subscribers,email'
        ]);

        // Save using Eloquent
        Subscriber::create([
            // 'name'  => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('success', 'You have Subscribe Successfully!');
    } //End Method
}
