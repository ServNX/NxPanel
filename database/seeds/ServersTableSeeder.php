<?php

use App\Server;
use App\Shell\ShellContract;
use Illuminate\Database\Seeder;

class ServersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ShellContract $shell)
    {
        $server = new Server();
        $server->name = $shell->hostname();
        $server->fqdn = $shell->fqdn();
        $server->os = $shell->os();
        $server->release = $shell->release();
        $server->arch = $shell->arch();
        $server->code_name = $shell->codeName();
        $server->memory = $shell->totalMemory();
        $server->save();
    }
}
