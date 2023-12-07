<?php

namespace controller;

class UserController extends Controller
{
    public function createUser(array $request)
    {
        $name = $request["name"];
        $photo_profile = $request["photo_profile"];

        $stmt = $this->db()->prepare('
            INSERT INTO users(name, photo_profile)
            VALUES (?, ?)
        ');

        $stmt->bind_param("ss", $name, $photo_profile);

        $stmt->execute();

        $stmt->close();
    }
}
