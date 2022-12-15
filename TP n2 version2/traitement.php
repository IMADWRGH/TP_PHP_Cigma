<?php
include_once("./functions.php");
$func = "";
if (isset($_GET["func"]))
    $func = $_GET["func"];
var_dump($_GET["func"]);
switch ($func) {
    case "supp":
        supp($_GET["num"]);
        break;
}
header('location:Affichage.php');
