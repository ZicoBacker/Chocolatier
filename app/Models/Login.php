<?php

namespace Models;

use School\app\Database;

class Login
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function InsertApplication(): bool
    {
        $this->db->query("INSERT INTO Inschrijving(bsn,email,firstname,lastname,birthdate,phone) VALUES(:bsn,:email,:firstname,:lastname,:birthdate,:phone);");
        $this->db->bind(":bsn", $_POST['bsn']);
        $this->db->bind(":email", $_POST['email']);
        $this->db->bind(":firstname", $_POST['firstname']);
        $this->db->bind(":lastname", $_POST['lastname']);
        $this->db->bind("birthdate", $_POST['birthdate']);
        $this->db->bind(":phone", $_POST["phone"]);
        return $this->db->execute();
    }

    public function attemptLogin($username): array|object
    {
        $this->db->query("SELECT username,pass FROM Admin WHERE username = :username");
        $this->db->bind(":username", $username);
        return $this->db->single();
    }
}
