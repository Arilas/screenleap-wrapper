<?php
/**
 * Created by PhpStorm.
 * User: krona
 * Date: 4/25/14
 * Time: 3:02 PM
 */

namespace Arilas\ScreenLeap;


use Arilas\ScreenLeap\Protocol\Connection;

class ScreenLeap
{
    protected $config;

    protected $connection;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->connection = new Connection($this->config['accountId'], $this->config['token']);
    }

    public function shareScreen()
    {
        return $this->connection->doShareRequest();
    }
} 