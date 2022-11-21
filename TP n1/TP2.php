<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2</title>
</head>

<body>
    <fieldset style="border-radius: 20px;">
        <legend>Informations Presonnelles</legend>
        <form method="get">
            <label for="nom">Nom : </label>
            <input type="text" name="nom"><br><br>
            <label for="sexe">Sexe : </label>
            M <input type="radio" name="sexe" value="Male">
            F <input type="radio" name="sexe" value="Female"><br><br>
            <label>Langues</label>
            Ar<input type="checkbox" name="lng[]" value="Arabe">
            Fr<input type="checkbox" name="lng[]" value="Francais">
            Ag<input type="checkbox" name="lng[]" value="Anglais">
            Esp<input type="checkbox" name="lng[]" value="Espagnol"><br><br>
            <label for="spt">Specialite :</label>
            <select name="spt">
                <option value="Informatique">Informatique</option>
                <option value="Management">Management</option>
                <option value="Telecommunication">Telecommunication</option>
                <option value="Logistique">Logistique</option>
            </select><br><br>
            <label for="adr">Adresse</label>
            <input type="text" name="adr"><br><br>
            <input type="submit" value="Envoyer" name="valider">
            <input type="reset" value="Annuler">
        </form>
    </fieldset>

    <?php
    $lng = $_GET["lng"];
    if (isset($_GET["valider"])) {
        echo "<h1>Les Informations Presonnelles</h1>";
        echo "  <ul>
        <li>" . $_GET['nom'] . "</li>
        <li>" . $_GET['sexe'] . "</li>
        <li>" . $_GET['nom'] . "</li>
        <li>" . implode(" ", $lng) . "</li>
        <li>" . $_GET['spt'] . "</li>
          <li>" . $_GET['adr'] . "</li>
    </ul>";
    }

    ?>

</body>

</html>