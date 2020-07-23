<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$username,$Password);
mysql_select_db($db);

if (isset($_POST['Email'])) 
{
	$Email=$_POST['Email']
	$password=$_POST['password']
	$sql="select * from loginform where Email='".$Email."' AND Password='".$password."'' limit 1";
	$result=mysql_query($sql)
	if(mysql_num_rows($result)==1){
		echo "you have Sucessfully logged In";
		exit();
	}
	else{
		echo "You have entered incorrect password";
		exit();
	}
}
?>