<?php 

$_db_hostname = "localhost";
$_db_user = "root";
$_db_password = "";
$_db_dbname = "kyc";



$_conn = mysqli_connect($_db_hostname, $_db_user, $_db_password, $_db_dbname) or die("Could not connect to database ...");


if ($_conn) {


	$db_query = "CREATE TABLE IF NOT EXISTS `users`(

		`id`  INT AUTO_INCREMENT PRIMARY KEY  NOT NULL,
		`surname` VARCHAR(32) NOT NULL,
		`firstname` VARCHAR(32) NOT NULL,
		`lastname` VARCHAR(32) NOT NULL,
		`username` VARCHAR(32) NOT NULL,
		`email` VARCHAR(32) NOT NULL,
		`password` VARCHAR(32) NOT NULL,
		`storage` VARCHAR(32) NOT NULL,
		`date_created` TIMESTAMP NOT NULL


)";

	$db_query_result = mysqli_query($_conn, $db_query);

	if ($db_query_result) {
		echo "success";
	}
	else{
		echo mysqli_error($_conn);
	}
}

 
	// code...




 