<?php $con=""; ?>
<?php

include_once('dashcon.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$mail = test_input($_POST["mail"]);
	$password = test_input($_POST["password"]);
	$con= new mysqli("localhost","root","","project");
	$stmt = $con->prepare("SELECT * FROM  adminlog");
	$stmt->execute();
	$users = $stmt->get_result();
	
	foreach($users as $user) {
		
		if(($user['mail'] == $mail) && 
			($user['password'] == $password)) {
				header("location: dashboard.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('Put correct password or email-Id orelse all deatils will be deleted')";
			echo "</script>";
			die();
		}
	}
}

?>
