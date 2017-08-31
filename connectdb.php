<?php
$serverName = "serverName\PSHOSTWEB, 43.255.240.112"; //serverName\instanceName
$connectionInfo = array( "Database"=>"essdemo", "UID"=>"prosofthost", "PWD"=>"Hostweb$123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
