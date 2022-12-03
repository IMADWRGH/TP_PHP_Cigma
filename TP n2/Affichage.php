<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des données</title>
    <style>
        table {
            width: 100%;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Num</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th collspan=2>option</th>
        </tr>
        <?php
        $con = mysqli_connect("127.0.0.1", "root", "", "tpvisiteurs");
        $req  = "SELECT * FROM `visiteurs`";
        $result = mysqli_query($con, $req);
        $query_run = mysqli_query($con, $req);
        if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $data) {
        ?>
                <tr>
                    <td><?= $data["ID_VISITEUR"] ?></td>
                    <td><?= $data["NOM"] ?></td>
                    <td><?= $data["PRENOM"] ?></td>
                    <td><?= $data["EMAIL"] ?></td>
                    <td><a href="Editer.php?num=<?= $data["ID_VISITEUR"] ?>">Edit</a></td>
                    <td><a href="Supprime.php?num=<?= $data["ID_VISITEUR"] ?>]">Sup</a></td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
    <br><br>
    <center><a href="./Saisie.html">Ajouter un visiteur</a></center>
</body>

</html>