<?php

  include('config.php');
  

   $visitorid=$_POST["visitorid"];
   $prisonerid=$_POST["prisonerid"];
   $name=$_POST["name"];
   $address=$_POST["address"];
   $relationship=$_POST["relationship"];
   $date=$_POST["date"];
   
$sql="Insert into visitor_info (visitor_id,P_ID,V_name,Address,relationship,date)values('$visitorid','$prisonerid','$name','$address','$relationship','$date');";

if($connection->query($sql)===TRUE)
{
    echo "successfully inserted into database";
    header('Location: view_visitor.php');
}
else{
    echo "Invalid Prisoner ID";
}




?>