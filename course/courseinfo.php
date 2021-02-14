<?php

  include('config.php');
  

   $courseid=$_POST["courseid"];
   $prisonerid=$_POST["prisonerid"];
   $name=$_POST["name"];
   $duration=$_POST["duration"];
   $date=$_POST["date"];
   
$sql="Insert into course (course_ID,P_ID,course_name,duration,start_date)values('$courseid','$prisonerid','$name','$duration','$date');";

if($connection->query($sql)===TRUE)
{
    echo "successfully inserted into database";
    header('Location: view_course.php');
}
else{
    echo "Invalid Prisoner ID";
}




?>