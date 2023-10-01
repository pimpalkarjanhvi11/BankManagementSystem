<?php

	$servername = "remotemysql.com";
        $username = "rc9yrJiJC2";
        $password = "va7MPd0Avy";
        $database = "rc9yrJiJC2";

// Creating connection
        $conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
