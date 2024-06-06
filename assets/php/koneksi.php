<?php

$hostname_db = "localhost";
$username_db = "root";
$password_db = "";
$db = "vsga_db_readmi";

$koneksi = mysqli_connect($hostname_db, $username_db, $password_db, $db) or 
die("error, gagal terhubung! ".mysqli_connect_error());
