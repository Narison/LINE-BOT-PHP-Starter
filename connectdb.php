<?php
$ip = '43.255.240.122';
$port = '1443';
$server_name = 'PSHOSTWEB';    
$server = "$ip,$port\PSHOSTWEB"; // <-- this is the line I need help with
$username = 'prosofthost';
$password = 'Hostweb$123';
$con = mssql_connect($server_name.",".$port,$username,$password);


if( $con ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
