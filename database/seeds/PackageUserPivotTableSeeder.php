<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageUserPivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the Admin Users Package to Unlimited
        DB::table('package_user')->insert([
            'user_id' => 1,
            'package_id' => 4
        ]);
    }
}
