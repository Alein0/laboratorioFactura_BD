<?php

namespace App\controllers;

use mysqli;

class DataBaseController
{
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $db = 'facturacion_tienda_db';
    private $conex;

    function __construct()
    {
        $this->conex = new mysqli($this->host, $this->user, $this->pwd, $this->db);
        if ($this->conex->connect_error) {
            die("Connection failed: " . $this->conex->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->conex;
    }

    function execSql($sql)
    {
        return $this->conex->query($sql);
    }

    function close()
    {
        $this->conex->close();
    }
}
