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
        $adminRole = new Role();
        $adminRole->role="Admin";
        $adminRole->desc="This role belongs to ADMIN of system.";
        $adminRole->save();

        $normalUser = new Role();
        $normalUser->role='User';
        $normalUser->desc='This role belongs to Normal user.';
        $normalUser->save();
    }
}
