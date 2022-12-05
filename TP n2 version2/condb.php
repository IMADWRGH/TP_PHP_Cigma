<?php
function connet($name_db)
{
    $con = mysqli_connect("localhost", "root", "", $name_db);

    if (!$con) {
        echo "Connection Failed" . mysqli_connect_error();
        exit();
    }
};
