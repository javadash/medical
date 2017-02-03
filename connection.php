<?php

$hostname = "localhost";
$username="trave_admin";
$password1="P5nti3o66()_";
$dbname="travelni_general";
//making a connection to mysql

$dbc = mysqli_connect($hostname, $username, $password1, $dbname) OR die("Could not connect to database". mysqli_connect_error());

//set encoding
mysqli_set_charset($dbc, "utf8");

//echo "You are connected to ".$dbname." Database";
?>