<?php

  include('config.php');
  

   $worksid=$_POST["worksid"];
   $prisonerid=$_POST["prisonerid"];
   $workstype=$_POST["workstype"];
   $description=$_POST["description"];
   
$sql="Insert into works (W_ID,P_ID,W_type,description)values('$worksid','$prisonerid','$workstype','$description');";

if($connection->query($sql)===TRUE)
{
    echo "successfully inserted into database";
    header('Location: view_works.php');
}
else{
    echo "Invalid Prisoner ID";
}




?>