<?php

  include('config.php');
  

   $prisonerid=$_POST["prisonerid"];
   $name=$_POST["name"];
   $gender=$_POST["gender"];
   $dob=$_POST["dob"];
   $address=$_POST["address"];
   $crimetype=$_POST["crimetype"];
   $crimelocation=$_POST["crimelocation"];
   $punishment=$_POST["punishment"];
   $pstartdate=$_POST["pstartdate"];
   $blockid=$_POST["blockid"];
   
$sql="Insert into prisoner_info (P_ID,P_name,Gender,DoB,Address,crime_type,crime_location,punishment,p_start_date,B_ID)values('$prisonerid','$name','$gender','$dob','$address','$crimetype','$crimelocation','$punishment','$pstartdate','$blockid');";

if($connection->query($sql)===TRUE)
{
    echo "successfully inserted into database";
    header('Location: view_prisoner.php');
}
else{
    echo "Invalid Block";
}




?>