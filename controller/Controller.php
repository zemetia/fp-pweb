<?php

namespace controller;

use config\DatabaseConnection;

class Controller
{
    private $db;

    public function __construct()
    {
        $this->db = DatabaseConnection::createConnection();
    }

    public function performTest()
    {
        echo "Test performed using the database connection.\n";
    }

    public function db()
    {
        return $this->db;
    }
}
