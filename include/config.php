<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';


$connection=@mysqli_connect($mysql_host,$mysql_user,$mysql_password);//@ is for removing warning

if(!@mysqli_connect($mysql_host,$mysql_user,$mysql_password) )

{ 
	die('Cannot connect to Database');// die or exit same thing

}

else
{
	if(@mysqli_select_db($connection,'donatetheblood'))

{
	

}
else
{

	echo"cannot connect to the database";
}
}





?>