	<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost','root','pwdpwd','binary');

		if($mysqli->connect_errno > 0){
    		echo "Unanle to connect to database";
                die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
		
		$query = "INSERT INTO hub (fn,ln,ea,db,pas) VALUES ('$fname','$sname','$email','$dob','$pass')";
		$insert_row = $mysqli->query($query);
		if($insert_row){
		 header('Location:Success.html');
		}
		else{
    		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	?>
