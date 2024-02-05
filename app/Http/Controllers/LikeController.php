<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LikeController extends Controller
{
    public function like(Gallery $gallery)
    {
        $user = Auth::user();

        if (!$gallery->likedByUser($user->id)) {
            $like = new Like();
            $like->user_id = $user->id;
            $like->gallery_id = $gallery->id;
            $like->save();
        }

        return redirect()->back();
    }

    public function unlike(Gallery $gallery)
    {
        $user = Auth::user();

        $gallery->likes()->where('user_id', $user->id)->delete();

        return redirect()->back();
    }
}
