<?php

include('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	
	$username = test_input($_POST["username"]);
    $email =test_input($_POST["email"]);
	$password =test_input($_POST["password"]);
	$sql = $con->prepare("SELECT * FROM support ");
	$sql->execute();
	$result = $sql->get_result();
	
	foreach($result as $result) {
		$password_hash =$result['password'];
		if(($result['username'] == $username) &&
            ($result['email']=== $email) &&
			($result['password'] == password_verify($password,$password_hash))) {
				$message ="successfully logged in";
				echo "<script type='text/javascript'>alert('$message')</script>";
				header("Location: dash.php");
		}  
		else {
			$message="incorect details";
			echo "<script type='text/javascript'>alert('$message')</script>";
			
	
			die();
		}
	}
}

?>
