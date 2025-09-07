<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class WorkspaceController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // получаем юзера или guest_token
        $userId = auth()->id();
        $guestToken = $request->cookie('guest_token');

        if (!$userId && !$guestToken) {
            $guestToken = Str::uuid();
            Cookie::queue('guest_token', $guestToken);
        }

        $workspace = Workspace::create([
            'name' => $validated['name'],
            'user_id' => $userId,
            'guest_token' => $guestToken,
        ]);

        return back()->with('success', 'Workspace создан!');
    }
}
