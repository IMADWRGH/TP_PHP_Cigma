<?php
include_once("Connexion.php");
$link = Connexion("tpvisiteurs");


function insert($Data)
{
        global $link;
        $req = "INSERT INTO visiteurs(nom,prenom,email)
        values('{$Data[0]}','{$Data[1]}','{$Data[2]}')";
        mysqli_query($link, $req);
}

function update($Data)
{
        global $link;
        $req = "UPDATE visiteurs SET NOM={$Data[1]}, PRENOM={$Data[2]}, EMAIL ={$Data[3]} WHERE  ID_VISITEUR ={$Data[0]} ";
        return mysqli_query($link, $req);
}

function delete($id)
{
        global $link;
        $req = "DELETE FROM visiteurs WHERE  ID_VISITEUR =$id ";
        return mysqli_query($link, $req);
}

function Select($id = 0)
{
        global $link;
        $req = "SELECT * FROM  visiteurs ";
        if ($id != 0)
                $req .= " WHERE  ID_VISITEUR = $id ";
        return mysqli_query($link, $req);
}
