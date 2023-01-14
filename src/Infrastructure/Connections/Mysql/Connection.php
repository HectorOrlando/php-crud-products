<?php

declare(strict_types=1);

namespace Infrastructure\Connections\Mysql;

use PDO;
use PDOException;

class Connection
{
    private $host = "localhost";
    private $dbname = "crud_products";
    private $user = "root";
    private $password = "";

    public function connection()
    {
        try {
            $PDO = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->password);
            return $PDO;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
