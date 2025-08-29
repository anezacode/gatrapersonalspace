<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function edit() {
        if (!Auth::check()) {
            abort(404);
        }

        $app = App::first();
        $home = Main::first();

        return view('pages.admin.s_home', compact([
            'app', 
            'home'
        ]));
    }
}
