<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Gestion d'absences</title>
    <style>
        h1 {
            text-align: center;
            margin-top: 50px;
        }

        table,
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-bottom: 25px;
        }
    </style>
</head>
<?php
include_once("../../Acces_BD/Absence.php");
$req = Select();
?>

<body>
    <h1>Gestion d'absences</h1>
    <table border="1px">
        <tr>
            <th>CNE</th>
            <th>SEMAINE</th>
            <th>NBR ABSENCES</th>
            <th colspan="2"><a href="form_insert.php"><i class="fa-solid fa-person-circle-plus"></i></a></th>
        </tr>
        <?php
        while ($result = mysqli_fetch_array($req)) {
        ?>
            <tr>
                <td><?= $result[1] ?></td>
                <td><?= $result[0] ?></td>
                <td><?= $result[2] ?></td>
                <td><a href="../../Traitement/Absence.php?action=delete&snm=<?= $result[0] ?>"><i class="fa-solid fa-trash-can "></i></a></td>
                <td><a href="form_update.php?action=update&snm=<?= $result[0] ?>"><i class="fa-solid fa-file-pen"></i></a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <center> <a href="../../index.php"><i class="fa-solid fa-house"></i> Reteur</a></center>
    <h1>Affichage la liste des eleves triee selon l'oredre croissant de leurs absences</h1>
    <form action="../../Traitement/Absence.php?action=delete" method="post">
        <label for="snm">Semaine : </label>
        <input type="text" name="snm">
        <input type="submit" value="Valider">
        <input type="reset" value="Annuler">
    </form>
</body>

</html>