<?php

//Code to Connect MySQLi connection
$con =mysqli_connect('127.0.0.1','root','','a');

//Code to Check Check connection for any errors
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: ".mysqli_connect_error();
}


//Code For starting our session to preserve our login
session_start();


//Code to check whether data with the name username has been submitted
if (isset($_POST['Email'])) {

	//variables to hold our submitted data with post
	$Email_Address = $_POST['Email'];
        
        //Encrypting our login password
	$Password = ($_POST['Password']);

	//our sql statement that we will execute
	$sql = "SELECT * FROM b WHERE c='$Email_Address' AND e='$Password'";

	//Executing the sql query with the connection
	$re = mysqli_query($con, $sql);

	//check to see if there is any record or row in the database if there is then the user exists
	if (mysqli_num_rows($re)) 
                
                {
                echo "<p>Welcome</p>";
		//creating a session name with username and inserting the submitted username
		$_SESSION['c'] = $Email_Address;
        echo '<a href="../login/login.html">Login Page</a>';
        echo"\n";
    echo '<a href="../login/signup.html">Signup Page</a>';

		//redirecting to homepage
		//header("Location: index.php");
         	}

                else
                {
		//display error if no record exists
		echo "Error : Invalid Login Credentials";
	        }
}
?>





