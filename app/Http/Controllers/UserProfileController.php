<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * account the user profile screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function account(Request $request)
    {
        return view('content.pages.page-account-settings-account', [
            'request' => $request,
            'user' => $request->user(),
        ]);
    }
}
