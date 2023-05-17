<?php
	$time=time();
	include('define_vars.php');
	include('connect.php');

	if (isset($_FILES['imageupload'])) {
      $imagename = $time.$_FILES['imageupload']['name'];
      $imagetemp = $_FILES['imageupload']['tmp_name'];
    }
    if (!$imagetemp) {
        echo "you need to select a file to upload";
    } else {
        move_uploaded_file($imagetemp, "upload/$imagename");
        echo $imagename;
        echo $imagetemp;
    }

	$name = "";
	$email = "";
	$gender = "";
	$post = "";
	$extra_post = "";
	$dob = "";
	$wa = "";
	$phone = "";
	$update = false;
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$post = $_POST['post'];
		$extra_post = $_POST['extra_post'];
		$dob = $_POST['dob'];
		$wa = $_POST['wa'];
		$phone = $_POST['phone'];
		echo $name.$email.$gender.$post.$city.$phone.$imagename;

		$query = mysqli_query($con,"INSERT INTO members (name, email,gender,post,dob,wa,phone,image,extra_post) VALUES ('$name','$email','$gender','$post','$dob','$wa','$phone','$imagename', '$extra_post')");
		if($query == true)
		{
			echo '<script>alert("Success")</script>';
			mysqli_close($con);
			header('location: ../admin-members.php');
		}else
		{
			echo '<script>alert("De-Success")</script>';
			mysqli_close($con);
			header('location: ../admin-members.php');
		}  
	}
?>