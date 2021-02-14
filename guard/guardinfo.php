<?php

  include('config.php');
  

   $guardid=$_POST["guardid"];
   $name=$_POST["name"];
   $shift=$_POST["shift"];
   $blockid=$_POST["blockid"];
   
$sql="Insert into guard (Guard_ID,Guard_name,shift,B_ID)values('$guardid','$name','$shift','$blockid');";

if($connection->query($sql)===TRUE)
{
    echo "successfully inserted into database";
    header('Location: view_guard.php');
}
else{
    echo "Invalid Block";
}




?>