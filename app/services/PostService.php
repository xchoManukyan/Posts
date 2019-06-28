<?php

namespace App\Services;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostService
{   

    protected $post;

	public function __construct(PostRepository $post)
	{
		$this->post = $post;
    }


	public function index()
	{
		return $this->post->all();
    }
    
    public function userPosts($username)
    {   
        
        $user = $this->post->findWhere([
            [
                ['name', $username],
            ]
        ])->first(); //where('name', $username)->with('profile', 'posts')->firstOrFail();
        return $user;
    }

    public function create(Request $request)
	{
        $attributes = $request->all();
         
        return $this->post->create($attributes);
	}

	public function read($id)
	{
        return $this->post->find($id);
	}

	public function update(Request $request, $id)
	{
	    $attributes = $request->all();
	  
        return $this->post->update($id, $attributes);
	}

	public function delete($id)
	{
        return $this->post->delete($id);
	}
}