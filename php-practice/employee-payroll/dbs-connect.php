<?php
$con = mysqli_connect('localhost', 'root', '');

if(!$con)
{
    die('<p align="right">Could not connect: '. mysqli_error($con)) . "</p>";//confirm connection
}

mysqli_select_db($con, "dbpayroll");

?>
