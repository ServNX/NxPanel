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
    $admin->name = env('ADMIN_NAME');
    $admin->username = env('ADMIN_USERNAME');
    $admin->email = env('ADMIN_EMAIL');
    $admin->password = bcrypt(env('ADMIN_PASSWORD'));
    $admin->status_id = 0;
    $admin->server_id = 0;
    $admin->save();
  }
}
