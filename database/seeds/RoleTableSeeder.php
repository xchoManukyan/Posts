<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_author = new Role();
        $role_author->name = 'author';
        $role_author->description = 'Post author';
        $role_author->save();
        
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'Site admin';
        $role_admin->save();
    }
}
