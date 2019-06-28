<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->title = 'Nature';
        $category->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus efficitur tempor diam vel dictum. Fusce rhoncus malesuada odio, in ultricies ipsum facilisis vitae. Praesent ac tristique purus.';
        $category->poster = 'storage/categories/kr9CnPsntqoPY7kViqjTTYFg11ChVo21tbTo3gBH.jpeg';
        $category->slug = 'nature';
        $category->save();

    }
}
