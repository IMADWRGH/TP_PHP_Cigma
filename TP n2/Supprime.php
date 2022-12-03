<?php
$num = $_GET["num"];
$con = mysqli_connect("127.0.0.1", "root", "", "tpvisiteurs");
$req  = "DELETE  FROM `visiteurs`  WHERE ID_VISITEUR='$num'";
$result = mysqli_query($con, $req);
header('location:Affichage.php');
