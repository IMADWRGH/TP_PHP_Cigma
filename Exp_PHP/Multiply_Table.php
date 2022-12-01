<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiply table</title>
</head>

<body>
    <form method="get">
        <label for="nb1">Nombre lignes:</label>
        <input type="number" name="nb1" require>&nbsp;
        <label for="nb2">Nombre colonnes:</label>
        <input type="number" name="nb2" require>&nbsp;&nbsp;
        <input type="submit" value="Afficher" name="btn">
    </form>
    <table></table>
    <?php
    if (isset($_GET['btn'])) {
        $color = "";
        $nb1 = $_GET['nb1'];
        $nb2 = $_GET['nb2'];
        echo "<table style='width:100% ; background-color:$color;'>";
        for ($i = 1; $i <= $nb1; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $nb2; $j++)
                echo "<td>" . $i * $j . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>