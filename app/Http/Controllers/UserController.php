<?php

namespace App\Http\Controllers;

use App\Models\App;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {

        $app = App::first();
        
        return view('pages.login', compact('app'));
    }
}
