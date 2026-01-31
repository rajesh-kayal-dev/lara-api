<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = auth()->user()->load('profile');

        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

       $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'bio' => 'nullable|string|max:1000',
        ]);

        $user->update([
            'name' => $validated['name']
        ]);

        // Update or create profile
        Profile::updateOrCreate(
            ['user_id'=> $user->id],
            [
                'phone' => $validated['phone'] ?? null,
                'bio' => $validated['bio'] ?? null,
            ]
        );


        return redirect()
            ->route('profile.edit')
            ->with('success', 'Profile updated successfully.');
    }
}
