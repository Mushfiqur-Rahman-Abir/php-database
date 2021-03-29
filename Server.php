<?php 

		 $uname = $pass = "";
		 $usernameErr = $passwordErr ="";

		if($_SERVER['REQUEST_METHOD'] == "POST") {

			if(empty($_POST['username'])) {
				$usernameErr = "Please enter a username";
			}
			else {
				$uname = $_POST['username'];
			}

			if(empty($_POST['pass'])) {
				$passwordErr = "Please enter a password";
			}
			else {
				$pass = $_POST['pass'];
			}

		}
		$hostname='localhost';
    	$username='wtj_user_1';
    	$password='123';
    	$dbname= 'wtj';
    	$conn= mysqli_connect($hostname,$username,$password,$dbname);

		

		if($conn->connect_errno) {
			echo "1. Database Connection Failed!...";
			echo "<br>";
			echo $conn->connect_error;
		}
		else {
			echo "Database Connection Successful!";

			echo "<br>";

			$sql = "select UserId, Username, Password from users where Username='$uname'";
			$res = $conn->query($sql);

			if($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					echo "id: " . $row['UserId'];
					echo "<br>";
					echo "username: " . $row['Username'];
					echo "<br>";
					echo "password: " . $row['Password'];
					echo "<br>";
					echo "<br>";
				}
			
			}

		}
	?>