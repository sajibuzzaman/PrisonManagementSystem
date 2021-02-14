<?php
  include('config.php');
       
       $sql="SELECT * FROM `guard`;";
       $result=mysqli_query($connection,$sql);


 

if (isset($_GET['del'])) {
	$id = $_GET['del'];
    $sqll="DELETE FROM guard WHERE Guard_ID='$id';";
	$check=mysqli_query($connection, $sqll);
	if($check)
    {echo"Done dana Done";}
    else{
        echo"Failed";
    }
    header('location: view_guard.php');
	
}

  


?>