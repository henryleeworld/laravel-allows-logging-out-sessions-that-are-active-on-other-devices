<?php

namespace App\Http\Controllers;

use Cjmellor\BrowserSessions\BrowserSessions;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SessionsController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('sessions.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        (new BrowserSessions)->logoutOtherBrowserSessions();
        return back()->with('status', 'sessions-logged-out');
    }
}
