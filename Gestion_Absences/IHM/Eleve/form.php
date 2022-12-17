<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des données</title>
    <style>
        form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 20px;
            background-color: #ccc;
            padding: 20px;
            border-radius: 25px;
        }

        input[type=submit],
        input[type=reset] {
            background-color: white;
            border: none;
            padding: 10px;
        }

        input[type=submit]:hover {
            color: #ccc;
            background: green;

        }

        input[type=reset]:hover {
            color: #ccc;
            background: red;

        }
    </style>
</head>
<?php
$action = "insert";
$v = array("", "", "", "");
if (!empty($_GET)) {
    include_once("../../Acces_BD/Eleve.php");
    $result = Select($_GET["cne"]);
    $v = mysqli_fetch_array($result);
    $action = "update";
}
?>

<body>
    <form action="../../Traitement/Eleve.php?action=<?= $action ?>" method="post">
        <label for="cne">Cne :</label>
        <input type="text" name="cne" value="<?= $v[0] ?>"><br><br>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" value="<?= $v[1] ?>"><br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" value="<?= $v[2] ?>"><br><br>
        <label for="grp">Groupe :</label>
        <input type="text" name="grp" value="<?= $v[3] ?>"><br><br>
        <input type="submit" value="<?= $_GET = "update" ? "Modifier" : "Ajouter"   ?>">
        <input type="reset" value="Annuler">
    </form>
</body>

</html>