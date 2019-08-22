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
        $admin = new User();
        $admin->name = config('install.admin_name');
        $admin->username = config('install.admin_username');
        $admin->email = config('install.admin_email');
        $admin->password = bcrypt(config('install.admin_password'));
        $admin->status_id = 0;
        $admin->server_id = 0;
        $admin->save();
    }
}
