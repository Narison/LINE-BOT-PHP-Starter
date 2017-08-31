<?php
$objConnect = mssql_connect("43.255.240.112\essdemo","prosofthost","Hostweb$123");

if($objConnect)  
{
  echo "Database Connected.<br />";  
}  
else  
{  
  echo "Database Connect Failed.<br />";  
  echo mssql_error();
}  
?>
