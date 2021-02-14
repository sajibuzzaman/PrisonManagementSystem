<?php
  include('config.php');
       
       $sql="SELECT * FROM `works`;";
       $result=mysqli_query($connection,$sql);


 

if (isset($_GET['del'])) {
	$id = $_GET['del'];
    $sqll="DELETE FROM works WHERE W_ID='$id';";
	$check=mysqli_query($connection, $sqll);
	if($check)
    {echo"Done dana Done";}
    else{
        echo"Failed";
    }
    header('location: view_works.php');
	
}

  


?>