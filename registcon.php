<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- bootstrap css -->
<link rel="stylesheet" href="bootstrap.min.css">
      
      <!-- style css -->
      <link rel="stylesheet" href="css/registech.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   

<title> REGISTER PAGE </title>
</head>

<style>
.grid {

   grid-template-columns: repeat(auto-fill, 150px);
   grid-gap: 20px;
}

</style>



<body class="main-layout inner_posituong">
<?php
   
     $fname = $_POST['fname'];
      
     $mname = $_POST['mname'];
      
     $lname = $_POST['lname'];

     $username = $_POST['username'];

     $gender = $_POST['gender'];
      
	  $email = $_POST['email'];

	  $password = $_POST['password'];
	  
	  $confpassword = $_POST['confpassword'];
	 
	  
?>
	
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- products -->
      <div class="grid">
      <div class="products">
         <div class="container">
            

		<main>
		<h1> REGISTER SUCCESS!! </h1>

		<label> First Name: </label>
		<span> <?php 
               if(isset($_POST['fname'])) {

                  echo $fname;
               
               if(empty($_POST['fname'])) {

                  echo "First Name is Required";
               }

               }
                  ?>
                   </span><br>

		<label> Middle Name: </label>
		<span> <?php 
               if(isset($_POST['mname'])) {

                  echo $mname;
               
               if(empty($_POST['mname'])) {

                  echo "Middle Name is Required";
               }

               }
                  ?> </span><br>

		<label> Last Name: </label>
		<span> <?php 
               if(isset($_POST['lname'])) {

                  echo $lname;
               
               if(empty($_POST['lname'])) {

                  echo "Last Name is Required";
               }

               }
                  ?> </span><br>

      <label> Gender: </label>
		<span> <?php 
               if(isset($_POST['gender'])) {

                  echo $gender;
               
               if(empty($_POST['gender'])) {

                  echo "Gender is Required";
               }

               }
                  ?> </span><br>

		<label> Username: </label>
		<span> <?php 
               if(isset($_POST['username'])) {

                  echo $username;
               
               if(empty($_POST['username'])) {

                  echo "Username is Required";
               }

               }
                  ?> </span><br>

		<label> Email: </label>
		<span> <?php 
               if(isset($_POST['email'])) {

                  echo $email;
               
               if(empty($_POST['email'])) {

                  echo "Email is Required";
               }

               }
                  ?></span><br>

		<label> Password: </label>
		<span> <?php echo $password; ?> </span><br>

		<label> Confirm password: </label>
		<span> <?php echo $confpassword; ?> </span><br>
</main>

      <a href="login.html"><button type="submit" style= "margin-left: 35%; padding: 15px 5px;">Proceed to Login form</button></a>

            </div>
    </div>
         </div>
      </div>
      <!-- end products -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <img class="logo1" src="images/logo1.png" alt="#"/>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Contact Us</h3>
                     <ul class="conta">
                        <li id="contact">Contact #: 09493093856<br> Email: patrickidoltinker@gmail.com</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>?? 2019 All Rights Reserved.</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
</body>

<?php
$conn = new mysqli('localhost','root','','registration');

if ($conn->connect_error)  {
  die("Connection failed: ".$conn->connect_error);
}

else{

	$stmt = $conn->prepare("insert into registform(fname, mname, lname, username, gender, email, password)
		values(?, ?, ?, ?, ?, ?, ?)");


		

	$stmt->bind_param("sssssss", $fname, $mname, $lname, $username, $gender, $email, $password);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}
?>


</html>