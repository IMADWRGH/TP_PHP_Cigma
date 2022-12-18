<?php
include_once("connexion.php");
$con = Connexion("gestion_absences");
function insert($Data)
{
    global $con;
    $req = "INSERT INTO `eleve`(`cne`, `nom`, `prenom`, `groupe`) VALUES ('{$Data[0]}','{$Data[1]}','{$Data[2]}','{$Data[3]}')";
    return mysqli_query($con, $req);
}

function update($Data)
{
    global $con;
    $req = "UPDATE  eleve  SET   nom =  '{$Data[1]}'  , prenom =  '{$Data[2]}'  , groupe =  '{$Data[3]}'  
     WHERE cne=  '{$Data[0]}'   ";
    return mysqli_query($con, $req);
}

function delete($cne)
{
    global $con;
    $req = "DELETE FROM  eleve  WHERE cne=$cne  ";
    return mysqli_query($con, $req);
}

function Select($cne = 0)
{
    global $con;
    $req = "SELECT * FROM   eleve  ";
    if ($cne != 0)
        $req .= " WHERE    cne   = $cne ";
    return mysqli_query($con, $req);
}

function nbr_elv($snm)
{
    global $con;
    $req = "SELECT a.semaine,a.nbr_abs,e.cne FROM eleve e ,absence a WHERE e.cne=a.cne AND a.semaine=$snm";
    return mysqli_query($con, $req);
}
