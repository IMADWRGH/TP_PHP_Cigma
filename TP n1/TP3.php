<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3</title>
</head>

<body>
    <center>
        <h1>Calculatrice simple</h1>
    </center>
    <form method="get">
        <label for="nb1">Premier Nombre :</label>
        <input type="number" name="nb1"><br><br>
        <label>Operateur : </label>
        <select name="opr">
            <option value="add">Addition</option>
            <option value="sout">Soustraction</option>
            <option value="mult">Multiplication</option>
            <option value="div">Division</option>
        </select><br><br>
        <label for="nb2">Deuxieme Nombre :</label>
        <input type="number" name="nb2"><br><br>
        <input type="submit" value="Calculer" name="cal">
    </form>
    <?php
    if (isset($_GET["cal"])) {
        $opr = $_GET["opr"];
        $nb1 = $_GET["nb1"];
        $nb2 = $_GET["nb2"];
        switch ($opr) {
            case "add":
                $result = $nb1 + $nb2;
                echo "<h2>la somme de $nb1 et $nb2 est : $result</h2>";
                break;
            case "sout":
                $result = $nb1 - $nb2;
                echo "<h2>la soustraction de $nb1 et $nb2 est : $result</h2>";
                break;
            case "mult":
                $result = $nb1 * $nb2;
                echo "<h2>la multiplication de $nb1 et $nb2 est : $result</h2>";
                break;
            case "div":
                if ($nb2 > 0) {
                    $result = $nb1 / $nb2;
                    echo "<h2>la divition de $nb1 et $nb2 est : $result</h2>";
                } else {
                    echo "<h2>Error</h2>";
                }
                break;
        }
    }
    ?>
</body>

</html>