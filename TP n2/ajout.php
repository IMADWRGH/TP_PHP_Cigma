<?php
if (isset($_POST["valider"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $con = mysqli_connect("127.0.0.1", "root", "", "tpvisiteurs");
    $req = "INSERT INTO `visiteurs`(`NOM`, `PRENOM`, `EMAIL`) VALUES ('$nom','$prenom','$email')";
    $result = mysqli_query($con, $req);
    //var_dump($result);
    $result != 0 ?  print "<h1>Data save</h1>" :  print "<h1>Error</h1>";
}
