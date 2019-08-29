<?php

use App\Ip;
use App\Shell\ShellContract;
use Illuminate\Database\Seeder;

class IpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ShellContract $shell)
    {
        $i = new Ip();
        $i->server_id = 1;
        $i->value = $shell->ip();
        $i->save();
    }
}
