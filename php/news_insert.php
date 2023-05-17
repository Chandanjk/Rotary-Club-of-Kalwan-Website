<?php
	include('define_vars.php');
	include('connect.php');

    $title = "";
	$date = "";
	$place = "";
	$content = "";
	
	if (isset($_POST['save1'])) {
		$title = $_POST['title1'];
		$date = $_POST['date1'];
		$place = $_POST['place1'];
		$content = $_POST['content1'];
		
		echo $title.$date.$place.$content;

		$query = mysqli_query($con,"INSERT INTO news(title,date0,place,content)VALUES('$title','$date','$place','$content')");
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