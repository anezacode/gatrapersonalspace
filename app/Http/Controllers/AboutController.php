<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            abort(404);
        }

        $app = App::first();
        $about = About::first();

        return view('pages.admin.s_about', compact([
            'app', 
            'about'
        ]));
    }
}
