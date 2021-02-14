<?php
  include('config.php');
       
       $sql="SELECT * FROM `visitor_info`;";
       $result=mysqli_query($connection,$sql);


 

if (isset($_GET['del'])) {
	$id = $_GET['del'];
    $sqll="DELETE FROM visitor_info WHERE visitor_id='$id';";
	$check=mysqli_query($connection, $sqll);
	if($check)
    {echo"Done dana Done";}
    else{
        echo"Failed";
    }
    header('location: view_visitor.php');
	
}

  


?>