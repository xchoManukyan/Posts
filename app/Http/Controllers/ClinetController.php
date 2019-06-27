<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;
use App\Profile;

class ClinetController extends Controller
{
    public function profiles()
    {
        return view('client/profiles', ['profiles' => Profile::get()]);
    }

    public function posts()
    {
        return view('client/posts', ['posts'=>Posts::with('user', 'keywords')->get()]);
    }

    public function post($slug)
    {
        $post = Posts::where('slug', $slug)->with('user', 'keywords')->firstOrFail();
        return view('client/post', ['author'=>$post->user, 'post' => $post, 'keywords'=>$post->keywords]);
    }
}
