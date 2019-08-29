<?php

namespace App\Shell;

interface ServiceContract
{
    public function enable(String $service): bool;

    public function disable(String $service): bool;

    public function start(String $service): bool;

    public function stop(String $service): bool;

    public function restart(String $service): bool;

    public function uid(String $service): string;

    public function gid(String $service): string;

    public function uptime(String $service): string;

    public function cpu(String $service): string;

    public function cpuTotal(String $service): string;

    public function memory(String $service): string;

    public function memoryTotal(String $service): string;

    public function diskRead(String $service): string;

    public function diskWrite(String $service): string;

    public function status(String $service): string;

    public function pid(String $service): string;

    public function parentPid(String $service): string;
}
