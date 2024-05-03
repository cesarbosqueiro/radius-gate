<?php

namespace App\Services;

use Exception;
use phpseclib3\Net\SSH2;

class SSHService
{
    protected SSH2 $ssh;

    /**
     * @throws Exception
     */
    public function __construct($username, $host, $password, $port = 22)
    {
        $this->ssh = new SSH2($host, $port);
        if (!$this->ssh->login($username, $password)) {
            throw new Exception('Login Failed');
        }
    }

    public function executeCommand($command): bool|string
    {
        return $this->ssh->exec($command);
    }
}
