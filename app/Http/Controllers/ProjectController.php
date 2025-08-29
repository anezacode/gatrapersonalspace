<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function show() {
        if (!Auth::check()) {
            abort(404);
        }

        $app = App::first();
        $project = Project::first();

        return view('pages.admin.s_project', compact([
            'app', 
            'project'
        ]));
    }
}
