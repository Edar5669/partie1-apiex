<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'dbapiex';

$connect  = new  mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
echo $dbName;

if ( $connect->connect_error) {
    die("La connexion a échoué:" . $db->connect_error);
}
 