	<?php 
		
		$mysqli = new mysqli('localhost','root','pwdpwd','binary');

		if($mysqli->connect_errno > 0){
    		echo "fdkjfd";
		}
$em=$_POST['wow'];
$pw=$_POST['fnfd'];


$sql="SELECT * FROM hub WHERE ea='$em' and pas='$pw'";
$result=$mysqli->query($sql);

$count=mysqli_num_rows($result);


if($count>=1){
 if(!empty($_POST["remember"])) {
	setcookie ("wow",$_POST["wow"],time()+ 360000);
	setcookie ("fnfd",$_POST["fnfd"],time()+ 360000);
	echo "Cookies Set Successfuly";
}
    header('Location:redirect.html');
}
else {
	echo "<h2>Login Failed!!!</h2>";
}





	?>
