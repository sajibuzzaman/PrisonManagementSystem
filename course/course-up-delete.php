<?php
  include('config.php');
       
       $sql="SELECT * FROM `course`;";
       $result=mysqli_query($connection,$sql);


 

if (isset($_GET['del'])) {
	$id = $_GET['del'];
    $sqll="DELETE FROM course WHERE course_ID='$id';";
	$check=mysqli_query($connection, $sqll);
	if($check)
    {echo"Done dana Done";}
    else{
        echo"Failed";
    }
    header('location: view_course.php');
	
}

  


?>