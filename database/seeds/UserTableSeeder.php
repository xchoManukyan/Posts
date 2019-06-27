<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_author  = Role::where('name', 'author')->first();

        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('12345678');
        $admin->save();
        $admin->roles()->attach($role_admin);
        
        $author = new User();
        $author->name = 'author';
        $author->email = 'author@author.com';
        $author->password = bcrypt('12345678');
        $author->save();
        $author->roles()->attach($role_author);

        $author = new User();
        $author->name = 'lion';
        $author->email = 'lion@lion.com';
        $author->password = bcrypt('12345678');
        $author->save();
        $author->roles()->attach($role_author);

        $author = new User();
        $author->name = 'Dog';
        $author->email = 'dog@dog.com';
        $author->password = bcrypt('12345678');
        $author->save();
        $author->roles()->attach($role_author);

        $author = new User();
        $author->name = 'Sparrow';
        $author->email = 'sparrow@sparrow.com';
        $author->password = bcrypt('12345678');
        $author->save();
        $author->roles()->attach($role_author);

        $author = new User();
        $author->name = 'Bear';
        $author->email = 'bear@bear.com';
        $author->password = bcrypt('12345678');
        $author->save();
        $author->roles()->attach($role_author);
    }
}
