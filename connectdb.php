<?php
$serverName = "serverName\sqlexpress, 43.255.240.112"; 
$connectionInfo = array( "Database"=>"essdemo", "UID"=>"prosofthost", "PWD"=>"Hostweb$123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?>
