<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = new Profile();
        $profile->first_name = 'fname';
        $profile->last_name = 'lname';
        $profile->gender = 'male';
        $profile->icon = 'storage/profiles/3x0NxTb1m4Nfn1HuZgqcR5Vs40p4RiSLd94clvHt.png';
        $profile->birth_date = '1990';
        $profile->phone = '+789 445 114 14';
        $profile->adress = 'City road 34';
        $profile->about = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas venenatis magna, sed suscipit elit suscipit ut. Ut facilisis fermentum turpis.';
        $profile->user_id = 1;
        $profile->save();

        $profile = new Profile();
        $profile->first_name = 'fname';
        $profile->last_name = 'lname';
        $profile->gender = 'male';
        $profile->icon = 'storage/profiles/wS3y54s3XFkqccKpJrCAzzeyDgAv4HJWRxWKIheo.jpeg';
        $profile->birth_date = '1990';
        $profile->phone = '+789 445 114 14';
        $profile->adress = 'City road 34';
        $profile->about = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas venenatis magna, sed suscipit elit suscipit ut. Ut facilisis fermentum turpis.';
        $profile->user_id = 2;
        $profile->save();
        
        $profile = new Profile();
        $profile->first_name = 'fname';
        $profile->last_name = 'lname';
        $profile->gender = 'male';
        $profile->icon = 'storage/profiles/9UsZz5m6EIrauK94ClhwicY0IFWrNSyz2v3Lqmbz.jpeg';
        $profile->birth_date = '1990';
        $profile->phone = '+789 445 114 14';
        $profile->adress = 'City road 34';
        $profile->about = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas venenatis magna, sed suscipit elit suscipit ut. Ut facilisis fermentum turpis.';
        $profile->user_id = 3;
        $profile->save();

        $profile = new Profile();
        $profile->first_name = 'fname';
        $profile->last_name = 'lname';
        $profile->gender = 'male';
        $profile->icon = 'storage/profiles/02krlTomTBuvdkzD6R8DkKEEIllR2InodbNF7v5q.jpeg';
        $profile->birth_date = '1990';
        $profile->phone = '+789 445 114 14';
        $profile->adress = 'City road 34';
        $profile->about = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas venenatis magna, sed suscipit elit suscipit ut. Ut facilisis fermentum turpis.';
        $profile->user_id = 4;
        $profile->save();

        $profile = new Profile();
        $profile->first_name = 'fname';
        $profile->last_name = 'lname';
        $profile->gender = 'male';
        $profile->icon = 'storage/profiles/nUDkUVZxUlkec4xjhi3hGWAiQ6tFMoU8nkltLOVJ.jpeg';
        $profile->birth_date = '1990';
        $profile->phone = '+789 445 114 14';
        $profile->adress = 'City road 34';
        $profile->about = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas venenatis magna, sed suscipit elit suscipit ut. Ut facilisis fermentum turpis.';
        $profile->user_id = 5;
        $profile->save();

        $profile = new Profile();
        $profile->first_name = 'fname';
        $profile->last_name = 'lname';
        $profile->gender = 'male';
        $profile->icon = 'storage/profiles/GAdGbtIuS7vsLFJphCVaS0Z808i4fuHoYUp4ySyv.jpeg';
        $profile->birth_date = '1990';
        $profile->phone = '+789 445 114 14';
        $profile->adress = 'City road 34';
        $profile->about = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas venenatis magna, sed suscipit elit suscipit ut. Ut facilisis fermentum turpis.';
        $profile->user_id = 6;
        $profile->save();

    }
}
