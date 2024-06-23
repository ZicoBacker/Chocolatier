<?php

declare(strict_types=1);

namespace School\app;

use Models\Login;
use Models\Admin;
use Dotenv\Dotenv;
use Exception;

final class Handler extends BaseHandler
{
    private $db;
    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__));
        $dotenv->load();
        session_start();
    }

    public function homeView(): string
    {
        return $this->render('index', [
            'title' => 'Home'
        ]);
    }

    public function academieView(): string
    {
        return $this->render('academie', [
            'title' => 'Info opleiding'
        ]);
    }

    public function aboutView(): string
    {
        return $this->render('about', [
            'title' => 'Info school'
        ]);
    }

    public function formView(): string
    {
        return $this->render('form', [
            'title' => 'Inschrijven'
        ]);
    }
    public function gameView(): string
    {
        return $this->render('game', [
            'title' => 'Spelletje'
        ]);
    }

    public function defaultRedirect(): void
    {
        header('Location: /');
    }

    public function addIns()
    {
        if (!parent::isPost()) {
            exit;
        }
        $this->db = new Login();

        $res = $this->db->InsertApplication();
        if (!$res) {
            return json_encode($res);
        }


        $mailer = new Mail($_POST['email'], $_POST['firstname']);
        $mailer->body($_POST['firstname'], "Inschrijving", null, $_POST);
        return json_encode($mailer->send());
    }

    public function AdminPanel(): string
    {
        //user needs to be logged in if they want to enter this page.
        if (!isset($_SESSION['user'])) {
            parent::redirect('index');
        }
        $this->db = new Admin();
        $submissionRows = $this->createSubmissionTable();
        $contactTable = $this->createContactTable();

        return $this->render('admin', [
            'title' => $_SESSION['user'],
            'subTable' => $submissionRows,
            'contactTable' => $contactTable
        ]);
    }

    // gets userdata from database and attemps to log in user. returns true upon sucession and false upon failure.
    public function LogIn()
    {
        $this->db = new Login();
        $user = $this->db->attemptLogin($_POST['username']);
        if (password_verify($_POST['password'], $user->pass)) {
            $_SESSION['user'] = $user->username;
            echo json_encode(true);
        } else {
            echo json_encode(false);
        }
    }

    // logs out user and returns true upon sucession, false upon failure.
    public function Logout()
    {
        try {
            unset($_SESSION['user']);
            session_destroy();
            echo json_encode(true);
        } catch (Exception $e) {
            echo json_encode(false);
        }
    }

    private function createSubmissionTable()
    {
        $results = $this->db->GetSubmissions();
        $Rows = "";
        //if there are not submissions, fill in with "geen inschijving"
        if (count($results) == 0) {
            $Rows = "<tr>
            <td>Geen inschrijving</td>
            <td>Geen inschrijving</td>
            <td>Geen inschrijving</td>
            <td>Geen inschrijving</td>
            <td>Geen inschrijving</td>
            <td>Geen inschrijving</td>
            </tr>";
        } else {
            //fill table if there are submissions.
            foreach ($results as $key => $submission) {
                $Rows .= "<tr>
                <td>{$submission->Id}</td>
                <td>{$submission->email}</td>
                <td>{$submission->firstname} {$submission->lastname}</td>
                <td>{$submission->birthdate}</td>
                <td>{$submission->bsn}</td>
                <td>{$submission->phone}</td>
            </tr>";
            }
        }
        return $Rows;
    }

    private function createContactTable()
    {
        $results = $this->db->GetContacts();
        $Rows = "";

        if (count($results) == 0) {
            $Rows = "<tr>
            <td>Geen vragen</td>
            <td>Geen vragen</td>
            <td>Geen vragen</td>
            </tr>";
        } else {
            foreach ($results as $key => $contact) {
                $Rows .= "<tr>
            <td>{$contact->Id}</td>
            <td>{$contact->Email}</td>
            <td>{$contact->Beschrijving}</td>
            </tr>";
            }
        }
        return $Rows;
    }
}
