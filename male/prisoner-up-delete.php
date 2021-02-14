<?php
  include('config.php');
       
       $sql="SELECT * FROM `prisoner_info` Where Gender='male';";
       $result=mysqli_query($connection,$sql);


  


?>