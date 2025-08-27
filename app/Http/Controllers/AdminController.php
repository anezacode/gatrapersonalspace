<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin() {
        if (!Auth::check()) {
            abort(404);
        }
        
        $app = App::first();
        $tags = Tag::all();
        return view('pages.admin', compact('app', 'tags'));
    }
}
