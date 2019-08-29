<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ServersTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(PackagesTableSeeder::class);
        $this->call(TemplatesTableSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(PackageUserPivotTableSeeder::class);
        $this->call(DomainsTableSeeder::class);
        $this->call(IpsTableSeeder::class);
    }
}
