<?php
if (isset($_POST["valider"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $con = mysqli_connect("127.0.0.1", "root", "", "tpvisiteurs");
    $req = "INSERT INTO `visiteurs`(`ID_VISITEUR`, `NOM`, `PRENOM`, `EMAIL`) VALUES ('$nom','$prenom','$mail')";
    $result = mysqli_query($con, $req);
    $result != 0 ?  print "<h1>Data save</h1>" :  print "<h1>Error</h1>";
}
