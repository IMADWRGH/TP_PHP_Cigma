<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1</title>
</head>

<body>
    <?php
    $Clients = array(
        array("code" => "123", "Nom" => "Alami", "Prenom" => "Salima"),
        array("code" => "124", "Nom" => "MOHTADI", "Prenom" => "Samir"),
        array("code" => "125", "Nom" => "ANDALOUSSI", "Prenom" => "Karim")
    );
    ?>
    <table>
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Prenom</th>
        </tr>

        <?php
        foreach ($Clients as $j) {

        ?>
            <tr>
                <td><?= $j["code"] ?></td>
                <td><?= $j["Nom"] ?></td>
                <td><?= $j["Prenom"] ?></td>
            </tr>

        <?php }
        ?>

    </table>
</body>

</html>