<?php

$action = "";
if (!empty($_GET['action']))
    $action = $_GET['action'];
include_once "../Acces_BD/Visiteur.php";
switch ($action) {

    case "insert":
        unset($_POST['id']);
        insert(array_values($_POST));
        break;
    case "update":
        update(array_values($_POST));
        break;
    case "delete":
        delete($_GET['id']);
        break;
}

header('Location:../IHM/visiteur');
