<?php

namespace config;

include "./env.php";

class DatabaseConnection
{
    public static function createConnection()
    {
        global $env;

        $servername = $env["DB_HOST"];
        $username = $env["DB_USER"];
        $password = $env["DB_PASS"];
        $database = $env["DB_NAME"];

        $conn = new \mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
