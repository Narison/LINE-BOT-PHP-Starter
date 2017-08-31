<?php
$username ="prosofthost";
$password = "Hostweb$123";
$database = "essdemo";
$server = "43.255.240.112";

$connection = mssql_connect($server, $username, $password);
if (!$connection) {  die('Not connected : ' . mssql_get_last_message());} 


$db_selected = mssql_select_db($databaseb, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mssql_get_last_message());
} else{

    // Success
}
