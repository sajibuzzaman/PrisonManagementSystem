
<!doctype html>
<html>
       <head>
	        <meta charset="utf-8">
	        <title>Log in Page</title>
            <link rel="shortcut icon" href="images/icon.png">
			<link rel="stylesheet" href="style.css">
	   </head>
	   <body>
	   
	        <div class="loginbox">
			    <h3>Log in to here</h3>
			    <form method="post" action="index.php">
				     <p>Username</p>
					 <input type="text" name="username" placeholder="admin">
					 <p>Password</p>
					 <input type="password" name="password" placeholder="*****">
					 <input type="submit" name="submit" value="Submit">
				</form>
				<?php
 session_start();
 require('config.php');
 if(isset($_POST['username']) and isset($_POST['password'])){
     $username=$_POST['username'];
     $password=$_POST['password'];
     
     $query="SELECT * FROM admin WHERE username='$username' and password='$password'";
     
     $result=mysqli_query($connection,$query) or die(mysqli_error($connection));
     
     $count=mysqli_num_rows($result);
     
     if($count==1)
     {
         $_SESSION['username']=$username;
         echo"You have logged in successfully";
         
         header("location: home.php");
     }
     else{
        echo '<script type="text/javascript"> alert("Username or password incorrect!") </script>';

     }
    /* $row=mysql_fetch_array($query);
     
     if($row['username']==$username && $row['password']==$password){
         echo "Login successful ";
     }
     else{
         echo "Login failed";
     }*/
 }




 
?>
			</div>
	   </body>
</html>