<?php

	include("config.php");


	if(isset($_POST['submit'])){
		$name=$_POST["Username"];
		$emailid=$_POST["email"];
		$password=$_POST["password"];
		$mobileNumber=$_POST["mobileNumber"];

		$result = mysqli_query($mysqli,"insert into users
		value('','$name','$emailid','$password','$mobileNumber')");

		if($result){
			echo"User Registration Sucessfully you can login now ";
		}else 
        {echo "Registration failed.";
	}
}

?>
