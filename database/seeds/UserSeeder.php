<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Make role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();
        // Make role user
        $userRole = new Role();
        $userRole->name = "user";
        $userRole->display_name = "User";
        $userRole->save();
        // Make sample admin
        $admin = new User();
        $admin->name = 'Putra Liowono';
        $admin->email = 'putra@gmail.com';
        $admin->password = bcrypt('putra');
        $admin->save();
        $admin->attachRole($adminRole);
        // Make sample member
        $member = new User();
        $member->name = "Clivansio Kevin Jovani";
        $member->email = 'clivansio@gmail.com';
        $member->password = bcrypt('clivansio');
        $member->save();
        $member->attachRole($userRole);

        // DB::table('users')->insert([
        //     [
        //         'name' => 'admin1',
        //         'email' => 'admin1@gmail.com',
        //         'password' => bcrypt('admin1'),
        //     ],[
        //         'name' => 'admin2',
        //         'email' => 'admin2@gmail.com',
        //         'password' => bcrypt('admin2'),
        //     ]
        // ]);
    }
}
