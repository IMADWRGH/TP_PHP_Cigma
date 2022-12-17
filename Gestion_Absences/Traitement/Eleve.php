<?php
include_once("../Acces_BD/Eleve.php");
$action = "";
if (!empty($_GET['action']))
    $action = $_GET['action'];
switch ($action) {

    case "insert":
        insert(array_values($_POST));
        break;
    case "update":
        update(array_values($_POST));
        break;
    case "delete":
        delete($_GET['cne']);
        break;
}

header('Location:../IHM/Eleve/eleve.php');
