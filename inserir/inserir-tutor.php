<?php

require_once __DIR__ . '/../classes/Tutor.php';
require_once __DIR__ . '/../classes/TutorDAO.php';

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    try {
        $tutor = new Tutor($_POST["nomeTutor"], $_POST["telefoneTutor"], $_POST["enderecoTutor"]);

        $tutorDAO = new TutorDAO();

        $tutorDAO->create($tutor);

    } catch (Exception $e) {
        echo $e->getMessage();
    }
} elseif ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (!empty($_GET["id"]))
    {
        $tutor = new TutorDAO();

        $tutor->delete($_GET["id"]);
    } else {
        echo "Erro";
    }
}