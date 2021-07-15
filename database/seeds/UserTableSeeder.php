<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminRole=Role::where('role','Admin')->first();
        $userRole= Role::where('role','User')->first();

        $adminUser=new User();
        $adminUser->first_name="Super Admin First Name";
        $adminUser->last_name="Super Admin Last Name";
        $adminUser->email="admin@gmail.com";
        $adminUser->phone_number="0093789331818";
        $adminUser->password=bcrypt('123456');
        $adminUser->image=('profileImages/yousuf.jpg');
        $adminUser->save();
        $adminUser->roles()->attach($adminRole);
//
//        $normalUser=new User();
//        $normalUser->first_name="Norma";
//        $normalUser->last_name="User";
//        $normalUser->email="user@email.com";
//        $normalUser->phone_number="0093794332020";
//        $normalUser->password=bcrypt('123456');
//        $normalUser->image=('assets/cms/img/theme/team-1-800x800.jpg');
//        $normalUser->save();
//        $normalUser->roles()->attach($userRole);



    }
}
