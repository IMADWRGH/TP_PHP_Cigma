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

<body>
    <form action="../../Traitement/Absence.php?action=insert" method="post">
        <label for="snm">Semaine :</label>
        <input type="text" name="snm"><br><br>
        <label for="cne">cne :</label>
        <select name="cne">
            <?php
            include_once("../../Acces_BD/Eleve.php");
            $req = select();
            while ($data = mysqli_fetch_array($req)) {
            ?>
                <option><?= $data[0] ?></option>
            <?php
            }
            ?>
        </select><br><br>
        <label for=" prenom">Nbr Absence :</label>
        <input type="text" name="nbra"><br><br>
        <input type="submit" value="Ajouter">
        <!-- <input type="submit" value="<?= $_GET = "update" ? "Modifier" : "Ajouter"   ?>"> -->
        <input type="reset" value="Annuler">
    </form>
</body>

</html>