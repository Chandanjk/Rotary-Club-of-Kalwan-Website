<?php
	include('define_vars.php');
	include('connect.php');

	if (isset($_FILES['imageupload'])) {
      $imagename = $_FILES['imageupload']['name'];
      $imagetemp = $_FILES['imageupload']['tmp_name'];
    }
    if (!$imagetemp) {
        echo "you need to select a file to upload";
    } else {
        move_uploaded_file($imagetemp, "upload/$imagename");
        echo $imagename;
        echo $imagetemp;
    }

	$title = "";
	$date = "";
	$update = false;
	if (isset($_POST['save'])) {
		$title = $_POST['title'];
		$date = $_POST['date'];

		$query = mysqli_query($con,"INSERT INTO documents(image, title, date0) VALUES ('$imagename','$title','$date')");
		if($query == true)
		{
			echo '<script>alert("Success")</script>';
			mysqli_close($con);
			header('location: ../admin-documents.php');
		}else
		{
			echo '<script>alert("De-Success")</script>';
			mysqli_close($con);
			header('location: ../admin-documents.php');
		}  
	}
?>