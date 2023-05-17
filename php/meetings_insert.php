<?php
	include('define_vars.php');
	include('connect.php');

	$date = "";
	$time = "";
	$content = "";
	
	if (isset($_POST['save2'])) {
		$date = $_POST['date2'];
		$time = $_POST['time2'];
		$content = $_POST['content2'];
		
		echo $date.$time.$content;

		$query = mysqli_query($con,"INSERT INTO meetings(date0,time0,content)VALUES('$date','$time','$content')");
		if($query == true)
		{
			echo '<script>alert("Success")</script>';
			mysqli_close($con);
			header('location: ../admin-news.php');
		}else
		{
			echo '<script>alert("De-Success")</script>';
			mysqli_close($con);
			header('location: ../admin-news.php');
		}  
	}

	if (isset($_POST['save3'])) {
		$date = $_POST['date3'];
		$time = $_POST['time3'];
		$place = $_POST['place3'];
		$content = $_POST['content3'];
		
		echo $date.$time.$content;

		$query = mysqli_query($con,"INSERT INTO outside_meetings(date0,time0,place,content)VALUES('$date','$time','$place','$content')");
		if($query == true)
		{
			echo '<script>alert("Success")</script>';
			mysqli_close($con);
			header('location: ../admin-news.php');
		}else
		{
			echo '<script>alert("De-Success")</script>';
			mysqli_close($con);
			header('location: ../admin-news.php');
		}  
	}
?>