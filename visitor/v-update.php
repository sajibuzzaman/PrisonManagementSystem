<?php
    include('config.php');
   
$visitorid=$_POST["visitorid"];
   $prisonerid=$_POST["prisonerid"];
   $name=$_POST["name"];
   $address=$_POST["address"];
   $relationship=$_POST["relationship"];
   $date=$_POST["date"];

$sqlll="UPDATE `visitor_info` SET `P_ID` = '$prisonerid', `V_name` = '$name', `Address` = '$address',`relationship` = '$relationship',`date` = '$date' WHERE `visitor_info`.`visitor_id` = '$visitorid'";
    $ff=mysqli_query($connection,$sqlll);


if($ff)
{
    echo "successfully updated info into database";
    
    header('location: view_visitor.php');
}
else{
    echo "Invalid Prisoner ID";
}


?>