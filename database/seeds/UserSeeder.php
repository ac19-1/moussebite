<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin';
        $user->address = 'jl. admin';
        $user->email = 'admin@moussebite.com';
        $user->password = bcrypt('admin');
        $user->phone = '081234567890';
        $user->save();

        $user = new User();
        $user->name = 'Audrey Chen';
        $user->address = 'Jl. Syahdan';
        $user->email = 'audreychen@moussebite.com';
        $user->password = bcrypt('audrey');
        $user->phone = '087766554433';
        $user->save();
    }
}
