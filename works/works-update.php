<?php
include('works-up-delete.php');

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    echo $id;
    $rec = mysqli_query($connection, "SELECT * FROM works WHERE W_ID='$id';");
    $record=mysqli_fetch_array($rec);
    
$prisonerid=$record['P_ID'];
$workstype=$record['W_type'];
$description=$record['description'];

    
}



?>
<!DOCTYPE html>
<html lang="en">
<title>Works Informatiion</title>
<link rel="shortcut icon" href="images/icon.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<!--New-->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
 <!--end new-->
<body>
<!--Header1-->
<header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
             
             
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="http://localhost/prison/home.php">Jail Management</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="http://localhost/prison/home.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Prisoner</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="http://localhost/prison/prisoner/view_prisoner.php">View Prisoner</a>
                  <a class="dropdown-item" href="http://localhost/prison/prisoner/add_prisoner.php">Add Prisoner</a>
                </div>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Guard</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="http://localhost/prison/guard/view_guard.php">View Guard</a>
                  <a class="dropdown-item" href="http://localhost/prison/guard/add_guard.php">Add Guard</a>
                </div>
              </li>
			  
			  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Visitor</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="http://localhost/prison/visitor/view_visitor.php">View Visitor</a>
                  <a class="dropdown-item" href="http://localhost/prison/visitor/add_visitor.php">Add Visitor</a>
                </div>
              </li>
			  
			  
			  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Course</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="http://localhost/prison/course/view_course.php">View Prisoner Course</a>
                  <a class="dropdown-item" href="http://localhost/prison/course/add_course.php">Add Prisoner Course</a>
                </div>
              </li>
			  
			  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Works</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="http://localhost/prison/works/view_works.php">View Prisoner Works</a>
                  <a class="dropdown-item" href="http://localhost/prison/works/add_works.php">Add Prisoner Works</a>
                </div>
              </li>
               
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header1 -->
  <!-- Header2 -->
      
      <div class="w3-display-container w3-text-blue" style="font-size: 50px">
          <img src="images/banner.jpg" alt="Lights" style="width:100%" style="height: 150px">
          <div class="w3-display-middle w3-large" > <h1 >Update Works Informatiion</h1></div>
      </div>
      <div class="w3-container" style="padding: 50px 200px 20px 200px">
      
      
      <form class="w3-container" action="w-update.php" method="post">
          
                 <p>
                      <input class="w3-input w3-light-grey w3-animate-input" type="hidden" name="worksid" value="<?php echo $id;?>"></p>
                 <p>
                     <label>Prisoner id</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="text" name="prisonerid" value="<?php echo $prisonerid;?>">
                </p>
		
                <p>
                     <label>Works Type</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="text" name="workstype" value="<?php echo $workstype;?>">
                </p>
                <p>
                     <label>Description</label>
                        <input class="w3-input w3-light-grey w3-animate-input" type="text" name="description" value="<?php echo $description;?>">
                </p>
                
                 
                 
                     <input type="submit" value="Update" class="w3-input w3-green w3-round-xxlarge w3-animate-input w3-hover-blue">
                     
       
                 
               
            </form>
      
      
      
      </div>
   
      
          
  </div>

<!-- W3.CSS Container -->
<div class="w3-dark-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Reference <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3school</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
