<?php

	$con =mysqli_connect('127.0.0.1','root','','a');
	
	if (!$con)
	{
		echo 'Not Connected To Server';
	}
	
	if (!mysqli_select_db($con,'a'))
	{
		echo 'Database Not Selected';
	}

	$a = "b";
    $Email_Address = $_POST['Email'];
	$Phone_Number = $_POST['Phonenumber'];
	$Password = $_POST['Password'];
	//$hashed = hash("sha512",$Password);
	
    mysqli_query($con,"INSERT INTO b(c,d,e) VALUES ('$Email_Address','$Phone_Number','$Password')");
				
	if(mysqli_affected_rows($con) > 0){
	echo "<p> Inserted</p>";
    echo '<a href="../login/login.html">Login Page</a>';
        echo"\n";
    echo '<a href="../login/signup.html">Signup Page</a>';
    } else {
	echo "NOT Inserted<br />";
	echo mysqli_error ($con);
}
//	header("refresh:2; url=http://localhost/login/signup.html");
    $con->close();




    
?>