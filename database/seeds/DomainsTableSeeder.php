<?php

use App\Domain;
use App\Shell\ShellContract;
use Illuminate\Database\Seeder;

class DomainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ShellContract $shell)
    {
        $fqdn = $shell->fqdn();

        $d = new Domain();
        $d->user_id = 1;
        $d->value = $fqdn;
        $d->ns_one = 'ns1.'.$fqdn;
        $d->ns_two = 'ns2.'.$fqdn;
        $d->save();
    }
}
