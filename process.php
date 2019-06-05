<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	//mysql credentials
	$admin_email = "mesureur.e@gmail.com";
	$mysql_host = "localhost";
	$mysql_username = "deb100889_emilie";
	$mysql_password = "sweetie2009";
	$mysql_database = "deb100889_emilie";
	
	$u_name = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below
	$u_email = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
	$u_text = filter_var($_POST["user_text"], FILTER_SANITIZE_STRING);

	//Open a new connection to the MySQL server
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		// die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
		die("error connecting");
	}	

	$statement = $mysqli->prepare("INSERT INTO users_data (user_name, user_email, user_message) VALUES(?, ?, ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('sss', $u_name, $u_email, $u_text); //bind values and execute insert query

	if($statement->execute()){
		print "Your message has been sent. <a href='index.php'>Back to the page</a>.";
		//send email
  		mail($admin_email, "You have received a message from:" . $u_name);
	}else{
		print "error executing statement";
		// print $mysqli->error; 
	}
}
?>