<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    public function insert(Request $request) {
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

            Log::info('New tag "' . $request->input('insert_tag') . '" has been inserted.');

            return redirect()->route('admin');

        } catch (\Exception $e) {
            Log::info('Error occured while inserting new tag: ' . $e->getMessage());
            
            return redirect()->back();
        }
    }

    public function toggle($id) {  
        if (!Auth::check()) {
            abort(404);
        }

        try {
            $tags = Tag::findOrFail($id);
            $tags->is_active = !$tags->is_active;
            $tags->save();

            if ($tags->is_active === true) {
                Log::info('Tag "' . $tags->name . '" has been activated.');
            } else {
                Log::info('Tag "' . $tags->name . '" has been deactivated.');
            }

            return redirect()->route('admin');

        } catch (\Exception $e) {
            Log::error('Error occured while changing tag status: ' . $e->getMessage());

            return redirect()->back();
        }
    }

    public function delete($id) {
        if (!Auth::check()) {
            abort(404);
        }

        try {
            $tags = Tag::findOrFail($id);

            Log::info('Tag "' . $tags->name . '" has been deleted.');

            $tags->delete();
            
            return redirect()->route('admin');
        } catch (\Exception $e) {
            Log::error('Error occured while deleting tag: ' . $e->getMessage());

            return redirect()->back();
        }
    }
}
