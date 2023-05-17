<?php
	$time=time();
	$name = "";
	$email = "";
	$gender = "";
	$post = "";
	$extra_post = "";
	$dob = "";
	$wa = "";
	$phone = "";
	$update = false;
	if (isset($_POST['update'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$post = $_POST['post'];
		$extra_post = $_POST['extra_post'];
		$dob = $_POST['dob'];
		$wa = $_POST['wa'];
		$phone = $_POST['phone'];
		echo $name.$email.$gender.$post.$phone;

		include('define_vars.php');
		include('connect.php');

		$id=$_POST['id'];
		echo $id."<br>";
		$sql = "SELECT * FROM members WHERE id=".$id;
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
              // output data of each row
            while($row = $result->fetch_assoc()) 
            {
            	$filePath="upload/".$row["image"];
				if (file_exists($filePath)) 
		        {
			        unlink($filePath);
		            echo "Image Deleted Successfully.<br>"; 
		        }else{
		        	echo "Couldn't delete<br>";
		        }
		    }
		}

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

		$query = mysqli_query($con,"UPDATE members SET name='$name',email='$email',gender='$gender',post='$post',dob='$dob',wa='$wa',phone='$phone',image='$imagename',extra_post='$extra_post' WHERE id='$id'");
		if($query == true)
		{
			echo '<script>alert("Success")</script>';
			mysqli_close($con);
			header('location: ../admin-members.php');
		}else
		{
			echo("Error description: " . $mysqli -> error);
			echo "<br>De-Success";
			mysqli_close($con);
			header('location: ../admin-members.php');
		}  
	}
?>