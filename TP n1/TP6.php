<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP6</title>
</head>

<body>
    <h2 style="color: blue;">Gestion des Produits</h2>
    <fieldset style="border-radius:20px;">
        <form method="get">
            <label for="d_achat">Date d'achat :</label>
            <input type="date" name="d_achat"><br><br>
            <label for="n_prd">Nombre des Produits :</label>
            <input type="number" name="n_prd"><br><br>
            <input type="submit" value="Envoyer" name="valider">
            <input type="reset" value="Annuler">
        </form>
    </fieldset>

    <?php
    if (isset($_GET["valider"])) {
        echo " <center><b>Date d'achat : " . $_GET["d_achat"] . "</b></center><br>";
        echo " <center><b>Date d'achat : " . $_GET["n_prd"] . "</b></center>";
        for ($i = 1; $i <= $_GET["n_prd"]; $i++) {
            echo "<fieldset style='border-radius:20px;'>
        <legend>Produit $i </legend>
        <form method='get'>
            <label for='ref'>Référence :</label>
            <input type='text' name='ref' value='$i'><br><br>
            <label for='dsg'>Désignation :</label>
            <input type='text' name='dsg'value=P$i><br><br>
            <label for='pu'>Prix unitaire:</label>
            <input type='number' name='pu'><br><br>
            <label for='qa'>Quantité achetée: :</label>
            <input type='number' name='qa'><br><br>";
        }
        echo
        " <input type='submit' value='Envoyer' name='valider1'>
            <input type='reset' value='Annuler'>
              </form>
                </fieldset>";;
    } ?>
    <?php
    if (isset($_GET["valider1"])) {
        echo " <table style='border:1px black solid ;width:100%;'>
        <tr style='background-color: black;color:white;'>
            <th>Référence</th>
            <th>Désignation</th>
            <th>Prix unitaire</th>
            <th>Quantité achetée:</th>
        </tr>";
        foreach ($_GET as $i) {
            echo "<tr>";
            foreach ($i as $j => $elm) {
                echo " <td>$elm</td>
                <td>$elm</td>
                <td>$elm</td>
                <td>$elm</td>";
            }
            echo "</tr>";
        }
        echo " <tr>
            <th colspan='2'>Total</th>
            <td></td>
            <td></td>
        </tr>
    </table>";
    }
    ?>
</body>

</html>