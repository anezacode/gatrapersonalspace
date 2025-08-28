<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    public function insertTag(Request $request) {
        if (!Auth::check()) {
            abort(404);
        }

        $request->validate([
            'insert_tag' => 'required|string|max:128'
        ]);

        try {
            $tags = new Tag;
            $tags->name = $request->input('insert_tag');
            $tags->is_active = true;
            $tags->save();

            return redirect()->route('admin');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'An error occured.' . $e->getMessage());
        }
    }

    public function deleteTag($id) {
        if (!Auth::check()) {
            abort(404);
        }

        try {
            $tag = Tag::findOrFail($id);
            $tag->delete();
            
            return redirect()->route('admin');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'Terjadi kesalahan.' . $e->getMessage());
        }
    }
}
