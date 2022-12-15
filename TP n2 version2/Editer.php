<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer des données</title>
    <style>
        form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>


<body>
    <?php
    include_once("./functions.php");
    $query_run = afficher($_GET["ID_VISITEUR"]);
    foreach ($query_run as $data) {
    ?>
        <form action="Modifier.php?num=<?= $data["ID_VISITEUR"] ?>" method="post">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" value="<?= $data["NOM"] ?>"><br><br>
            <label for="prenom">Prenom :</label>
            <input type="text" name="prenom" value="<?= $data["PRENOM"] ?>"><br><br>
            <label for="Email">Email :</label>
            <input type="text" name="email" value="<?= $data["EMAIL"] ?>"><br><br>
            <input type="submit" value="Modifier" name="mdf">
        </form>
    <?php
    }

    ?>
</body>

</html>