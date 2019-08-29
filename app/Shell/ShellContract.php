<?php

namespace App\Shell;

interface ShellContract
{
    public function hostname(): string;

    public function fqdn(): string;

    public function ip(): string;

    public function os(): string;

    public function arch(): string;

    public function release(): string;

    public function codeName(): string;

    public function totalMemory(): int;
}
