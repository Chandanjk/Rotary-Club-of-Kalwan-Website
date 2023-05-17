<?php
	include('define_vars.php');
	include('connect.php');

	$name = "";
	$year = "";
	$update = false;
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$year = $_POST['year'];
		echo $name.$year;

		$query = mysqli_query($con,"INSERT INTO presidents (year,name) VALUES ('$year','$name')");
		if($query == true)
		{
			echo 'Success';
			mysqli_close($con);
			header('location: ../admin-about.php');
		}else
		{
			echo 'NO success';
			mysqli_close($con);
			header('location: ../admin-about.php');
		}  
	}

	if (isset($_POST['delete'])) {
		$id = $_POST['id'];
		echo $id;

		$query = mysqli_query($con,"DELETE FROM presidents WHERE id=".$id);
		if($query == true)
		{
			echo 'Success';
			mysqli_close($con);
			header('location: ../admin-about.php');
		}else
		{
			echo 'NO success';
			mysqli_close($con);
			header('location: ../admin-about.php');
		}  
	}
?>