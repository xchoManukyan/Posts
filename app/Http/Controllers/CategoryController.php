<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CategoryController extends Controller
{   

    protected function slug($value)
    {
        $slg = str_slug($value);
        $isset = Category::where('slug', $slg)->first();

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
    
    public function index()
    {   
        $user = User::with('profile', 'roles')->findOrfail(auth()->id());
        $categories = Category::get();
        return view('profile.category.index', ['user'=>$user, 'categories'=>$categories]);
    }
    
    public function create()
    {   
        $user = User::with('profile', 'roles')->findOrfail(auth()->id());
        $category = Schema::getColumnListing('cartegories');
        
        return view('profile.category.create', ['user'=>$user]);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        $data['poster'] = 'storage/'.$request->poster->store('categories');
        $data['slug'] = $this->slug($data['title']);

        Category::create($data);
        return redirect('profile/'.auth()->user()->name.'/categories')->with('success', 'Category created!');
    }
    
    public function show(Category $category)
    {
        //
    }

    
    public function edit(Category $category)
    {
        //
    }

    
    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
