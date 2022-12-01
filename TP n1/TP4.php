<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP4</title>
    <style>
        .form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <form method="post" class="form">
        <label for="nb1"> Nombre 1 :</label>
        <input type="number" name="nb1" value=<?= !empty($_POST) ? $_POST["nb2"] : "" ?>><br><br>
        <label for="nb2"> Nombre 2 :</label>
        <input type="number" name="nb2" value=<?= !empty($_POST) ? $_POST["nb1"] : "" ?>><br><br>
        <input type="submit" name="sub" value="<?= !empty($_POST) ? ($_POST["sub"] == "Premuter" ? "Annuler" : "Premuter") : "Premuter" ?>">
    </form>
</body>

</html>