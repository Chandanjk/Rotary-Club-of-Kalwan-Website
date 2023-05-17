<?php
	include('define_vars.php');
	if (isset($_POST['delete_post'])) {
		include('connect.php');
		$id=$_POST['id'];
		echo $id."<br>";
		$sql = "SELECT * FROM posts WHERE id=".$id;
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
              // output data of each row
            while($row = $result->fetch_assoc()) 
            {
            	$filePath1="upload/".$row["image1"];
            	$filePath2="upload/".$row["image2"];
            	$filePath3="upload/".$row["image3"];
            	$filePath4="upload/".$row["image4"];
            	$filePath5="upload/".$row["image5"];
				if (file_exists($filePath1)) 
		        {
			        unlink($filePath1);
		            echo "Image 1 Deleted Successfully.<br>"; 
		        }
		        else
		        {
		            echo "Image 1 does not exists<br>"; 
		        }
		        if (file_exists($filePath2)) 
		        {
			        unlink($filePath2);
		            echo "Image 2 Deleted Successfully.<br>"; 
		        }
		        else
		        {
		            echo "Image 2 does not exists<br>"; 
		        }
		        if (file_exists($filePath3)) 
		        {
			        unlink($filePath3);
		            echo "Image 3 Deleted Successfully.<br>"; 
		        }
		        else
		        {
		            echo "Image 3 does not exists<br>"; 
		        }
		        if (file_exists($filePath4)) 
		        {
			        unlink($filePath4);
		            echo "Image 4 Deleted Successfully.<br>"; 
		        }
		        else
		        {
		            echo "Image 4 does not exists<br>"; 
		        }
		        if (file_exists($filePath5)) 
		        {
			        unlink($filePath5);
		            echo "Image 5 Deleted Successfully.<br>"; 
		        }
		        else
		        {
		            echo "Image 5 does not exists<br>"; 
		        }
		    }
		}
		$sql = "DELETE FROM posts WHERE id=".$id;
		$result = $con->query($sql);
		if($result == true)
		{
			echo "Successfully deleted from database<br>";
			mysqli_close($con);
			header('location: ../admin-work.php');
		}else
		{
			echo "Unsuccessful<br>";
			mysqli_close($con);
			header('location: ../admin-work.php');
		}  
	}
	if (isset($_POST['delete_members'])) {
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
		        	echo "UnSuccessful.<br>";
		        }
		    }
		}
		$sql = "DELETE FROM members WHERE id=".$id;
		$result = $con->query($sql);
		if($result == true)
		{
			echo "Successfully deleted from database<br>";
			mysqli_close($con);
			header('location: ../admin-members.php');
		}else
		{
			echo "Unsuccessful<br>";
			mysqli_close($con);
			header('location: ../admin-members.php');
		}  
	}
	if (isset($_POST['delete_news'])) {
		include('connect.php');
		$id=$_POST['id'];
		echo $id."<br>";
		$sql = "DELETE FROM news WHERE id=".$id;
		$result = $con->query($sql);
		if($result == true)
		{
			echo "Successfully deleted from database<br>";
			mysqli_close($con);
			header('location: ../admin-news.php');
		}else
		{
			echo "Unsuccessful<br>";
			mysqli_close($con);
			header('location: ../admin-news.php');
		}  
	}
	if (isset($_POST['delete_meetings'])) {
		include('connect.php');
		$id=$_POST['id'];
		echo $id."<br>";
		$sql = "DELETE FROM meetings WHERE id=".$id;
		$result = $con->query($sql);
		if($result == true)
		{
			echo "Successfully deleted from database<br>";
			mysqli_close($con);
			header('location: ../admin-news.php');
		}else
		{
			echo "Unsuccessful<br>";
			mysqli_close($con);
			header('location: ../admin-news.php');
		}  
	}
	if (isset($_POST['delete_documents'])) {
		include('connect.php');
		$id=$_POST['id'];
		echo $id."<br>";
		$sql = "SELECT * FROM documents WHERE id=".$id;
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
		        	echo "UnSuccessful.<br>";
		        }
		    }
		}
		$sql = "DELETE FROM documents WHERE id=".$id;
		$result = $con->query($sql);
		if($result == true)
		{
			echo "Successfully deleted from database<br>";
			mysqli_close($con);
			header('location: ../admin-documents.php');
		}else
		{
			echo "Unsuccessful<br>";
			mysqli_close($con);
			header('location: ../admin-documents.php');
		}  
	}
?>