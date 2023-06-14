<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class LangController extends Controller
{
    public function index() {
        return view('home');
    }

    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        cookie('X-Language', $request->lang, 60 * 24 * 30 * 12);

        return redirect()->route('home');
    }
}
