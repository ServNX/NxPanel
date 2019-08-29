<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = config('install.admin_password');

        $admin = new User();
        $admin->name = config('install.admin_name');
        $admin->username = config('install.admin_username');
        $admin->email = config('install.admin_email');
        $admin->password = $password ? bcrypt($password) : null;
        $admin->status_id = 1;
        $admin->server_id = 1;
        $admin->save();
    }
}
