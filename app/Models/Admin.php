<?php

namespace Models;

use School\app\Database;

class Admin
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function GetSubmissions()
    {
        $this->db->query("SELECT * FROM Inschrijving ORDER BY firstname");
        return $this->db->resultSet();
    }
}
