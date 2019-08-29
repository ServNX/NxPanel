<?php

use App\Package;
use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            'Basic' => [
                'disk_quota' => 2000,
                'bandwidth' => 500,
                'web_domains' => 2,
                'dns_domains' => 2,
                'mail_domains' => 2,
                'mail_accounts' => 4,
                'databases' => 2,
                'crons' => 5,
                'backups' => 2
            ],
            'Professional' => [
                'disk_quota' => 4000,
                'bandwidth' => 1000,
                'web_domains' => 10,
                'dns_domains' => 10,
                'mail_domains' => 10,
                'mail_accounts' => 25,
                'databases' => 10,
                'crons' => 15,
                'backups' => 10
            ],
            'Premium' => [
                'shell' => '/bin/bash',
                'disk_quota' => 10000,
                'bandwidth' => 1500,
                'web_domains' => 20,
                'dns_domains' => 20,
                'mail_domains' => 20,
                'mail_accounts' => 50,
                'databases' => 20,
                'crons' => 25,
                'backups' => 20
            ],
            'Unlimited' => [
                'shell' => '/bin/bash',
                'disk_quota' => 0,
                'bandwidth' => 0,
                'web_domains' => 0,
                'dns_domains' => 0,
                'mail_domains' => 0,
                'mail_accounts' => 0,
                'databases' => 0,
                'crons' => 0,
                'backups' => 0
            ]
        ];

        foreach ($packages as $k => $v) {
            $p = new Package();
            $p->name = $k;
            isset($v['shell']) ? $p->shell = $v['shell'] : null;
            $p->disk_quota = $v['disk_quota'];
            $p->bandwidth = $v['bandwidth'];
            $p->web_domains = $v['web_domains'];
            $p->dns_domains = $v['dns_domains'];
            $p->mail_domains = $v['mail_domains'];
            $p->mail_accounts = $v['mail_accounts'];
            $p->databases = $v['databases'];
            $p->crons = $v['crons'];
            $p->backups = $v['backups'];
            $p->save();
        }
    }
}
