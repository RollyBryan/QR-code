<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "essaie qr code";
$connection = mysqli_connect($server, $username, $password);
$select_bdd = mysqli_select_db($connection, $database);
if (!$select_bdd){
    echo "connection terminer";
}