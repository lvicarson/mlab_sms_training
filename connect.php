<?php


//Connect To Database
function connect_to_database()
{
	

	$db_host = "localhost";
	$db_database = "Bima";
    $db_user = "root";
    $db_pass = "";

	$db_server = mysqli_connect($db_host, $db_user, $db_pass);
	if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());
	mysqli_select_db($db_server, $db_database)
	or die("Unable to select database: " . mysqli_error());

}

?>