<?php
$databaseHost = 'localhost';
$databasePort = '3306';
$databaseUsername = 'root';
$databasePerssword = '';
$databaseName = 'rs_sejahtera';

$db = mysqli_connect($databaseHost, $databaseUsername, 
$databasePerssword, $databaseName, $databasePort);