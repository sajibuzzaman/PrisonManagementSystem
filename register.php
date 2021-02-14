<?php
	require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="shortcut icon" href="images/icon.png">
<link rel="stylesheet" href="csss/style.css">
</head>
<body style="background-color:#bdc3c7">
	
	<div id="main-wrapper">
		<center>
			<h2>Registration Form</h2>
			<img src="images/avatar.jpg" class="avatar"/>
		</center>
	
		<form class="myform" action="register.php"method="post">
			<label><b>Full Name:</b></label><br>
			<input name="fullname" type="text" class="inputvalues" placeholder="Type your Full Name" required/><br>
			<label><b>Gender:</b></label>
			<input type="radio" class="radiobtns" name="gender" value="male" checked required> Male
			<input type="radio" class="radiobtns" name="gender" value="male" required> Female<br>
			<label><b>Department of Prisons</b></label>
			<select class="department" name="department">
			  <option value="Inspector General of Prisons">Inspector General of Prisons</option>
			  <option value="Add. Inspector General of Prisons">Add. Inspector General of Prisons</option>
			  <option value="Deputy Inspector General">Deputy Inspector General</option>
			  <option value="Asst. Inspector General of Prisons">Asst. Inspector General of Prisons</option>
			  <option value="Administrative Officer">Administrative Officer</option>
			  <option value="Budget Officer">Budget Officer</option>
			  <option value="Statistician">Statistician</option>
			  <option value="General Employee">General Employee</option>
			</select><br>
			<label><b>Username:</b></label><br>
			<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
			<label><b>Password:</b></label><br>
			<input name="password" type="password" class="inputvalues" placeholder="Your password" required/><br>
			<label><b>Confirm Password:</b></label><br>
			<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
			<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
			<a href="home.php"><input type="button" id="back_btn" value="Back"/></a>
		</form>
		
		<?php
			if(isset($_POST['submit_btn']))
			{
				//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';

				$fullname =$_POST['fullname'];
				$username = $_POST['username'];
				$password =$_POST['password'];
				$cpassword = $_POST['cpassword'];
				$gender = $_POST['gender'];
				$department = $_POST['department'];

				//echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
				//echo '<script type="text/javascript"> alert("'.$fullname.' ---'.$username.' --- '.$password.' --- '.$gender.' --- '.$department.'"  ) </script>';

				if($password==$cpassword)
				{
					$query= "select * from userinfotable WHERE username='$username'";
					$query_run = mysqli_query($con,$query);
					
					if(mysqli_num_rows($query_run)>0)
					{
						// there is already a user with the same username
						echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
					}
					else
					{
						$query= "insert into userinfotable values('$','$username','$fullname','$gender','$department','$password')";
					
						$query_run = mysqli_query($con,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("'.mysqli_error($con).'") </script>';
						}
					}
					
					
				}
				else{
				echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';	
				}
				
				
				
				
			}
		?>
	</div>
</body>
</html>