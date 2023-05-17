<?php
    $time=time();
    include('define_vars.php');
	include('connect.php');

	// Configure upload directory and allowed file types 
    $upload_dir = 'upload'.DIRECTORY_SEPARATOR; 
    $allowed_types = array('jpg', 'png', 'jpeg', 'gif'); 
      
    // Define maxsize for files i.e 2MB 
    $maxsize = 2 * 1024 * 1024;  
  	$images = array();
  	for ($i = 0; $i < 5; $i++)
	{
    	array_push($array, NULL);
    	//or $array[] = $some_data; for single items.
	}
	$count=0;
    // Checks if user sent an empty form  
    if(!empty(array_filter($_FILES['files']['name']))) { 
  
        // Loop through each file in files[] array 
        foreach ($_FILES['files']['tmp_name'] as $key => $value) { 
              
            $file_tmpname = $_FILES['files']['tmp_name'][$key]; 
            $file_name = $time.$_FILES['files']['name'][$key]; 
            $file_size = $_FILES['files']['size'][$key]; 
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION); 
  
            // Set upload file path
            if($count < 5)
            {
            	$images[$count]=$file_name;
            	$count++;
            } 
            else{
            	break;
            }
            $filepath = $upload_dir.$file_name; 
  
            // Check file type is allowed or not 
            if(in_array(strtolower($file_ext), $allowed_types)) { 
  
                // Verify file size - 2MB max  
                if ($file_size > $maxsize)          
                    echo "Error: File size is larger than the allowed limit.";  
  
                // If file with name already exist then append time in 
                // front of name of the file to avoid overwriting of file 
                if(file_exists($filepath)) { 
                    $filepath = $upload_dir.time().$file_name; 
                      
                    if( move_uploaded_file($file_tmpname, $filepath)) { 
                        echo "{$file_name} successfully uploaded <br />"; 
                    }  
                    else {                      
                        echo "Error uploading {$file_name} <br />";  
                    } 
                } 
                else { 
                  
                    if( move_uploaded_file($file_tmpname, $filepath)) { 
                        echo "{$file_name} successfully uploaded <br />"; 
                    } 
                    else {                      
                        echo "Error uploading {$file_name} <br />";  
                    } 
                } 
            } 
            else { 
                  
                // If file extention not valid 
                echo "Error uploading {$file_name} ";  
                echo "({$file_ext} file type is not allowed)<br / >"; 
            }  
        } 
    }  
    else { 
          
        // If no files selected 
        echo "No files selected."; 
    }  

    $title = "";
	$date = "";
	$place = "";
	$content = "";
	$image1 = NULL;
	$image2 = NULL;
	$image3 = NULL;
	$image4 = NULL;
	$image5 = NULL;
	$update = false;
	if (isset($_POST['save'])) {
		$title = $_POST['title'];
		$date = $_POST['date'];
		$place = $_POST['place'];
		$content = $_POST['content'];
		if($count==1)
		{
			$image1 = $images[0];
		}else if($count==2)
		{
			$image1 = $images[0];
			$image2 = $images[1];
		}else if($count==3)
		{
			$image1 = $images[0];
			$image2 = $images[1];
			$image3 = $images[2];
		}else if($count==4)
		{
			$image1 = $images[0];
			$image2 = $images[1];
			$image3 = $images[2];
			$image4 = $images[3];
		}else if($count==5)
		{
			$image1 = $images[0];
			$image2 = $images[1];
			$image3 = $images[2];
			$image4 = $images[3];
			$image5 = $images[4];
		}
		echo $title.$date.$place.$content.$image1.$image2.$image3.$image4.$image5;

		$query = mysqli_query($con,"INSERT INTO posts(image1,image2,image3,image4,image5,title,date0,place,content)VALUES('$image1','$image2','$image3','$image4','$image5','$title','$date','$place','$content')");
		if($query == true)
		{
			echo '<script>alert("Success")</script>';
			mysqli_close($con);
			header('location: ../admin-work.php');
		}else
		{
			echo '<script>alert("De-Success")</script>';
			mysqli_close($con);
			header('location: ../admin-work.php');
		}  
	}
?>