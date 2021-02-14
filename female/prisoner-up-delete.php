<?php
  include('config.php');
       
       $sql="SELECT * FROM `prisoner_info` Where Gender='female';";
       $result=mysqli_query($connection,$sql);


  


?>