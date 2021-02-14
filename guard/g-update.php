<?php
    include('config.php');
   
$guardid=$_POST["guardid"];
   $name=$_POST["name"];
   $shift=$_POST["shift"];
   $blockid=$_POST["blockid"];

$sqlll="UPDATE `guard` SET `Guard_name` = '$name', `shift` = '$shift', `B_ID` = '$blockid' WHERE `guard`.`Guard_ID` = '$guardid'";
    $ff=mysqli_query($connection,$sqlll);


if($ff)
{
    echo "successfully updated info into database";
    
    header('location: view_guard.php');
}
else{
    echo "Invalid Block";
}


?>