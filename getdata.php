<?php

include 'conn.php';

$sql=$conn->query("select * from user_details");

$result=array();

while($fetchdata=$sql->fetch_assoc()){//fetch_assoc returns rows as result

	$result[]=$fetchdata;
}


echo json_encode($result);//we are encoding data as a json file

?> 
