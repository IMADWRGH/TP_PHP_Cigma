<?php
include_once("../Acces_BD/Absence.php");
$action = "";
if (!empty($_GET['action']))
    $action = $_GET['action'];
var_dump($_GET);
switch ($action) {
    case "insert":
        insert(array_values($_POST));
        break;
    case "delete":
        delete($_GET["snm"]);
        break;
    case "update":
        update(array_values($_POST));
        break;
}
header('Location:../IHM/Absence/absence.php');
