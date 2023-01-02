<?php
class connect
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";

    function conn($DB)
    {
        return mysqli_connect($this->host, $this->user, $this->password, $DB);
    }
}
