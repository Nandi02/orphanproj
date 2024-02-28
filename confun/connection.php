<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = " ";
$dbname = "smart_chakra_db";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
     die("Connection failed: ". mysqli_connect_error());
}else
{
    //  echo"connected";
}
?>