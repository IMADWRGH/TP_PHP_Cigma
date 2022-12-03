<?php
if (isset($_POST["valider"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $con = mysqli_connect("127.0.0.1", "root", "", "tpvisiteurs");
    $req = "INSERT INTO `visiteurs`(`NOM`, `PRENOM`, `EMAIL`) VALUES ('$nom','$prenom','$email')";
    mysqli_query($con, $req);
    header('location : Affichage.php');
}
