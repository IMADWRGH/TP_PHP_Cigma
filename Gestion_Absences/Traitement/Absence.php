<?php
include_once("../Acces_BD/Absence.php");
$action = "";
if (!empty($_GET['action']))
    $action = $_GET['action'];
switch ($action) {
    case "insert":
        insert(array_values($_POST));
        break;
    case "delete":
        delete($_GET["snm"]);
        break;
    case "update":
        update($_POST);
        break;
}
header('Location:../IHM/Absence/absence.php');
