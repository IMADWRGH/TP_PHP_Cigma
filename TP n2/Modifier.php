<?php
if (isset($_POST["mdf"])) {
    $num = $_GET["num"];
    $con = mysqli_connect("127.0.0.1", "root", "", "tpvisiteurs");
    list($nom, $prenom, $email) = array_values($_POST);
    $req  = "UPDATE `visiteurs` SET `NOM`='$nom',`PRENOM`='$prenom',`EMAIL`='$email' WHERE ID_VISITEUR='$num'";
    $result = mysqli_query($con, $req);
    header('location:Affichage.php');
}
