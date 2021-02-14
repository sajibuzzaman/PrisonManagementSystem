<?php
    include('config.php');
   
$worksid=$_POST["worksid"];
   $prisonerid=$_POST["prisonerid"];
   $workstype=$_POST["workstype"];
   $description=$_POST["description"];

$sqlll="UPDATE `works` SET `P_ID` = '$prisonerid', `W_type` = '$workstype', `description` = '$description' WHERE `works`.`W_ID` = '$worksid'";
    $ff=mysqli_query($connection,$sqlll);


if($ff)
{
    echo "successfully updated info into database";
    
    header('location: view_works.php');
}
else{
    echo "Invalid Prisoner ID";
}


?>