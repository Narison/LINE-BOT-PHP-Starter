<?php
	$objConnect = mssql_connect("localhost","NARISON\HRMI-PM2","");
	if($objConnect)
	{
		echo "Database Connected.";
	}
	else
	{
		echo "Database Connect Failed.";
	}

	mssql_close($objConnect);
?>

