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
/*include_once "functions.php";
$req = lister();*/
$con = mysqli_connect("localhost", "root", "", "tpvisiteurs");
$query = "SELECT * FROM `visiteurs`";
$req = mysqli_query($con, $query);
?>

<body>
    <table>
        <tr>
            <th>Num</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>E-mail</th>
            <th colspan="2">Option</th>
        </tr>
        <?php
        while ($result = mysqli_fetch_row($req)) {
        ?>
            <tr>
                <td><?= $result[1] ?></td>
                <td><?= $result[2] ?></td>
                <td><?= $result[3] ?></td>
                <td><?= $result[4] ?></td>
                <td><a href="Editer.php?func=edit & num=<?= $num["ID_VISITEUR"] ?>">Edit</a></td>
                <td><a href="Supprime.php?func=supp & num=<?= $num["ID_VISITEUR"] ?>">Supp</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>