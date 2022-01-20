<?php

$conn=new mysqli("localhost","root","","mytable");//This returns true or false whether connection was succesful or not
//mysqli is a function which we use for connection.Here localhost=server,root=username(by default for localhost),""=password(by default) ie empty
//,mytable=name of database not table

if($conn){

	echo "Connection Stablished";
}
else
{
	echo "falied";
//	echo mysqli_connect_error(); dispalys reason of error for failure to connect
//-> is an object operator
/*
    $name = $_POST['name'];//This receives the value from the submission of a form from the element containing the name tag  'name' The value is stored into 
	//name variable
	//Here note that the post request is executed from the frontend not the backend we are merely receiving the data from the post request
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `mytable`.`stuff` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    Here mytable is name of database and stuff is name of table
	if($con->query($sql) == true){In the conn object we use the query method wsing -> operator to run sql query
		//it returns true on successful execution of query ie entry is inserted into the table
        echo "Successfully inserted";}

	$con->close(); CLoses the connection

	*/
}

?>
