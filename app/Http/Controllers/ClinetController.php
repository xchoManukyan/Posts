<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Profile;

use App\Services\PostService;

class ClinetController extends Controller
{   
    protected $postservice;

    public function __construct(PostService $postservice)
	{
		$this->postservice = $postservice;
	}

    public function profiles()
    {
        return view('client/profiles', ['profiles' => Profile::get()]);
    }

    public function posts()
    {   
        return view('client/posts', ['posts'=>$this->postservice->index()]);
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->with('user', 'keywords')->firstOrFail();
        return view('client/post', ['author'=>$post->user, 'post' => $post, 'keywords'=>$post->keywords]);
    }
}
