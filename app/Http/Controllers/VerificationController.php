<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class VerificationController extends Controller
{
    public function verify(Request $request, $id)
    {
        $user = User::find($id);
        $user->is_email_verified = 1;
        $user->save();
        if (!$user) {
            abort(404);
        }
        return redirect('/login')->with('success', 'Email Verfied Successfully !');
        if ($request->hasValidSignature() && !$user->hasVerifiedEmail()) {
            // $user->markEmailAsVerified();
            return redirect('/login')->with('success', 'Email Verfied Successfully !');
        }
        // Return a JSON response indicating failure
        return redirect('/login')->with('verified', true);
    }
}
