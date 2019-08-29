<?php

namespace App\Shell\Ubuntu;

use App\Shell\ShellContract;

class Shell implements ShellContract
{
    public function hostname(): string
    {
        return trim(exec('hostname'));
    }

    public function fqdn(): string
    {
        return trim(exec('hostname -f'));
    }

    public function ip(): string
    {
        return trim(explode(' ', exec('hostname -I'))[0]);
    }

    public function os(): string
    {
        return trim(exec('head -n1 /etc/issue | cut -f 1 -d \' \''));
    }

    public function release(): string
    {
        return trim(exec('lsb_release -s -r'));
    }

    public function codeName(): string
    {
        return trim(exec('lsb_release -s -c'));
    }

    public function arch(): string
    {
        return trim(exec('uname -i'));
    }

    public function totalMemory(): int
    {
        return (int) trim(exec('grep \'MemTotal\' /proc/meminfo |tr \' \' \'\n\' |grep [0-9]'));
    }
}
