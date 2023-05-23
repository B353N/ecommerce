<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserProfileController extends Controller
{
    public function index(): View
    {
        return view('frontend.dashboard.profile');
    }

    public function updateProfile(Request $request)
    {
       $request->validate([
          'name' => ['required', 'max: 100'],
           'email' => ['required', 'email', 'unique:users,email,'.Auth::user()->id],
           'phone' => ['required', 'max: 30']
       ]);

       $user = Auth::user();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->phone = $request->phone;
       //Save all
        $user->save();

        toastr('Your details saved successful');
        return redirect()->back();
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8']
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);

        toastr()->success('Password Updated Successfully');
        return redirect()->back();
    }
}
