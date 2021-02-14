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

$sqlll="UPDATE `prisoner_info` SET `P_name` = '$name', `Gender` = '$gender', `DoB` = '$dob', `Address` = '$address',`crime_type` = '$crimetype',`crime_location` = '$crimelocation',`punishment` = '$punishment',`p_start_date` = '$pstartdate',`B_ID` = '$blockid' WHERE `prisoner_info`.`P_ID` = '$prisonerid'";
    $ff=mysqli_query($connection,$sqlll);


if($ff)
{
    echo "successfully updated info into database";
    
    header('location: view_prisoner.php');
}
else{
    echo "Invalid Block";
}


?>