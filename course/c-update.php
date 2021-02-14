<?php
    include('config.php');
   
$courseid=$_POST["courseid"];
   $prisonerid=$_POST["prisonerid"];
   $name=$_POST["name"];
   $duration=$_POST["duration"];
   $date=$_POST["date"];

$sqlll="UPDATE `course` SET `P_ID` = '$prisonerid', `course_name` = '$name', `duration` = '$duration',`start_date` = '$date' WHERE `course`.`course_ID` = '$courseid'";
    $ff=mysqli_query($connection,$sqlll);


if($ff)
{
    echo "successfully updated info into database";
    
    header('location: view_course.php');
}
else{
    echo "Invalid Prisoner ID";
}


?>