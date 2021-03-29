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

		

		if($conn->connect_errno){
        		echo " Database Connection Failed!...";
				echo "<br>";
				echo $conn->connect_error;
        }

		else
		{
			echo "Database connection successful!";

			$stmt1 = $conn->prepare("insert into users (Username, Password) values (?, ?)");
			$stmt1->bind_param("ss", $uname, $pass);
			$status = $stmt1->execute();
			if($status) {
				echo "Data Insert Successful!";
			}
			else {
				echo "Failed to Insert Data.";
				echo "<br>";
				echo $conn->error;
			}

		}
	?>


        