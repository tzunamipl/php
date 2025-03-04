<?php

$db_host = "172.30.7.45:41306";
$db_name = "cars";
$db_user = "admin";
$db_pass = "password";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

echo "Connected succesfully";

?>