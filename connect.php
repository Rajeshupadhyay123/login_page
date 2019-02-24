<?php
$fname=filter_input(INPUT_POST, "fname");
$lname=filter_input(INPUT_POST, "lname");
if(!empty($fname)){
	if(!empty($pass)){
		$host="localhost";
		$dbusername="root";
		$dbpassword="prince@123";
		$dbname="login";

//create connection
		$conn=new mysql($host,$dbusername,$dbpassword,$dbname);

		if(mysql_connect_error()){
			die('Connect Error ('.mysql_connect_error().')'.mysql_connect_error());
		}
		else{
			$sql="INSERT INTO account(fname,lname) values('$fname','$lname')";
			if($con->query($sql)){
				echo "New record is inserted successfuly";
			}else{
				echo "Error".$sql."<br>".$conn->error;
			}
			$conn->close();
		}

}else{
	echo "passwrd is not match";
	die();
}
}
else{
	echo "username should not be empty";
	die();

}
?>