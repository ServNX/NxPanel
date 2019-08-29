<?php

namespace App\Shell\Ubuntu;

use App\Shell\ServiceContract;

class Service implements ServiceContract
{

    protected function getValueFor(String $service, String $field): string
    {
        $e = shell_exec('sudo monit status '.$service.'| egrep "^[[:space:]]{2}'.$field.'"');
        if ($e === null) {
            return 'Error';
        }

        $p = '/(^'.preg_quote($field, '/').'\s{2,})(.{1,})/';
        preg_match($p, trim($e), $m);
        return isset($m[2]) ? $m[2] : '-';
    }

    protected function monitCmdFor(String $service, String $command): bool
    {
        $e = shell_exec('sudo monit '.$command.' '.$service);
        if ($e !== null) {
            return false;
        }

        return true;
    }

    protected function systemCtlFor(String $service, String $command): bool
    {
        $e = shell_exec('sudo systemctl '.$command.' '.$service);
        if ($e === null) {
            return false;
        }

        return true;
    }

    public function enable(String $service): bool
    {
        return $this->systemCtlFor($service, 'enable');
    }

    public function disable(String $service): bool
    {
        return $this->systemCtlFor($service, 'disable');
    }

    public function start(String $service): bool
    {
        return $this->monitCmdFor($service, 'start');
    }

    public function stop(String $service): bool
    {
        return $this->monitCmdFor($service, 'stop');
    }

    public function restart(String $service): bool
    {
        return $this->monitCmdFor($service, 'restart');
    }

    public function status(String $service): string
    {
        return $this->getValueFor($service, 'status');
    }

    public function uid(String $service): string
    {
        return $this->getValueFor($service, 'uid');
    }

    public function gid(String $service): string
    {
        return $this->getValueFor($service, 'gid');
    }

    public function uptime(String $service): string
    {
        return $this->getValueFor($service, 'uptime');
    }

    public function cpu(String $service): string
    {
        return $this->getValueFor($service, 'cpu');
    }

    public function cpuTotal(String $service): string
    {
        return $this->getValueFor($service, 'cpu total');
    }

    public function memory(String $service): string
    {
        return $this->getValueFor($service, 'memory');
    }

    public function memoryTotal(String $service): string
    {
        return $this->getValueFor($service, 'memory total');
    }

    public function diskRead(String $service): string
    {
        return $this->getValueFor($service, 'disk read');
    }

    public function diskWrite(String $service): string
    {
        return $this->getValueFor($service, 'disk write');
    }

    public function pid(String $service): string
    {
        return $this->getValueFor($service, 'pid');
    }

    public function parentPid(String $service): string
    {
        return $this->getValueFor($service, 'parent pid');
    }
}
