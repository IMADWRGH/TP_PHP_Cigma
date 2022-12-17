<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des données</title>
    <style>
        table {
            margin: 1em;
            border: 3px black;
            border-style: solid;
            max-width: 100%;
            width: 100%;

        }

        th {
            font-size: 24px;
            background-color: gray;
        }
    </style>
</head>
<?php
include_once("../../Acces_BD/Visiteur.php");
$req = select();
?>

<body>
    <table>
        <tr>
            <th>Num</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>E-mail</th>
            <th colspan="2"><a href="Form.php">>>Ajouter</a></th>
        </tr>
        <?php
        while ($result = mysqli_fetch_array($req)) {
        ?>
            <tr>
                <td><?= $result["ID_VISITEUR"] ?></td>
                <td><?= $result["NOM"] ?></td>
                <td><?= $result["PRENOM"] ?></td>
                <td><?= $result["EMAIL"] ?></td>
                <td><a href="form.php?id=<?= $result[0] ?>">Edit</a></td>
                <td><a href="../../Traitement/visiteur.php?action=delete&id=<?= $result[0] ?>">Supp</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>