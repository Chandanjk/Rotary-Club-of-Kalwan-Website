
<?php

    $con = $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
 	//$connect= mysqli_connect('localhost','rotary', 'chandan', '12345678');
 	if($connect==false)
 	{
 		//die("connection failed" .mysqli_connect_error());
 	}else
 	{
 		//echo "connected";
 	}
?>