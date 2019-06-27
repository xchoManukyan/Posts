<?php

namespace App\Http\Controllers;

use App\Posts;
use App\User;
use App\Keywords;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Gate;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected function slug($value)
    {
        $slg = str_slug($value);
        $isset = Posts::where('slug', $slg)->first();

        if($isset){

            $slg = explode('-', $slg);
            $slg_num = end($slg);
            
            if(is_numeric($slg_num)){
                $slg_num = intval($slg_num) + 1;
                $index = count( $slg ) - 1;
                $slg[$index] = $slg_num;
                $slg = implode('-', $slg);
            }else{
                $slg = implode('-', $slg).'-1';
            }

            return $this->slug($slg);
        }

        return $slg;
    }

    protected function saveKeywords($keywords)
    {   
        $keywords_ids = [];

        if ($keywords) {

        $keywords = explode(',', $keywords);
        
        
            for ($i=0; $i < count($keywords); $i++) {
                $text = ltrim($keywords[$i]);
                $keyword = Keywords::firstOrNew(['text'=>$text]);
                $keyword->save();
                $keywords_ids[] = $keyword->id;
            }
        }
        return $keywords_ids;
    }

    public function index($username)
    {   
        $user = User::where('name', $username)->with('profile', 'posts')->firstOrFail();
        return view('profile/posts', ['user' => $user, 'profile' => $user->profile, 'posts' => $user->posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($username)
    {   
        $user = User::where('name', $username)->with('profile')->firstOrFail();

        if(!Gate::allows('checkOwner', $user)){
            abort(403, 'not Authorized');
        }

        
        return view('profile/postCreate', ['user' => $user, 'profile' => $user->profile]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $username)
    {     
        $user = User::where('name', $username)->with('profile')->firstOrFail();

        if(!Gate::allows('checkOwner', $user)){
            abort(403, 'not Authorized');
        }

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        $data['poster'] = 'storage/'.$request->poster->store('posts');
        $data['slug'] = $this->slug($data['title']);
        $data['user_id'] = auth()->id();

        $post = Posts::create($data);
        $post->keywords()->sync($this->saveKeywords($request->keywords));
        return redirect('profile/'.$user->name.'/posts')->with('success', 'Post created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($username, $slug)
    {   
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($username, $slug)
    {   
        
        $post = Posts::where('slug', $slug)->with('user', 'keywords')->firstOrFail();
        
        if(!Gate::allows('checkOwner', $post->user) || $post->user->name != $username){
            abort(403, 'not Authorized');
        }

        return view('profile/postEdit', ['user' => $post->user, 'profile' => $post->user->profile, 'post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $username, $slug)
    {
        $post = Posts::where('slug', $slug)->with('user')->firstOrFail();
       
        if(!Gate::allows('checkOwner', $post->user) || $post->user->name != $username){
            abort(403, 'not Authorized');
        }

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'poster' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->poster) {
            $data['poster'] = 'storage/'.$request->poster->store('posts');
        }
        
        $post->update($data);
        $post->keywords()->sync($this->saveKeywords($request->keywords));

        return redirect('posts/'.$post->slug)->with('success', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($username, $slug)
    {
        $post = Posts::where('slug', $slug)->with('user')->firstOrFail();
       
        if(!Gate::allows('checkOwner', $post->user) || $post->user->name != $username){
            abort(403, 'not Authorized');
        }

        $post->delete();    
        return redirect('profile/'.$username.'/posts/')->with('success', 'Post Deleted!');
    }
}
