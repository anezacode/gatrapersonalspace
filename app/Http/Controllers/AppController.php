<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\App;
use App\Models\Main;
use App\Models\Project;
use App\Models\Protag;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function main() {
        $app = App::first();
        $main = Main::first();
        $about = About::all();
        $projects = Project::with('tags')->orderBy('id', 'desc')->get();
        $tags = Tag::where('is_active', true)->get();
        $protags = Protag::all();

        return view('pages.main', compact(
            'app',
            'main',
            'about',
            'projects',
            'tags',
            'protags'
        ));
    }

    public function admin() {
        if (!Auth::check()) {
            abort(404);
        }
        
        $app = App::first();
        $tags = Tag::all();
        
        return view('pages.admin.dashboard', compact('app', 'tags'));
    }

    public function edit() {
        if (!Auth::check()) {
            abort(404);
        }

        $app = App::first();
        
        return view('pages.admin.general', compact('app'));
    }
}
