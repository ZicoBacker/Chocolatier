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

    public function GetContacts()
    {
        $this->db->query("SELECT * FROM Contact");
        return $this->db->resultSet();
    }

    public function AddContact(string $email, string $desc): bool
    {
        $this->db->query("INSERT INTO Contact(Email,Beschrijving) VALUES (:email,:Beschrijving)");

        $this->db->bind(":email", $email);
        $this->db->bind(":Beschrijving", $desc);

        return $this->db->execute();
    }
}
