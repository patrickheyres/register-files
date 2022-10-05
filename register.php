<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>REGISTER</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- bootstrap css -->
      <link rel="stylesheet" href="bootstrap.min.css">
      
      <!-- style css -->
      <link rel="stylesheet" href="css/istayl.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <!-- body -->
   <body class="main-layout inner_posituong">
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
      <div  class="products">
         <div class="container">
            

            <h2> <b>REGISTER ACCOUNT</b></h2>

     <form action="registcon.php", method="post" name="register">

    <p style="text-align: left; padding-left: 100px; color: black; margin-top: 10px;"><b>First Name</b><br>
    <input type="text" name="fname" id="fname" ><br>
    </p>

    <p style="text-align: left; padding-left: 100px; color: black; margin-top: 10px;"><b>Middle Name</b><br>
    <input type="text" name="mname" id="mname" ><br>
    </p>

    <p style="text-align: left; padding-left: 100px; color: black; margin-top: 10px;"><b>Last Name</b><br>
    <input type="text" name="lname" id="lname" ><br>
    </p>

    <p style="text-align: left; padding-left: 100px; color: black; margin-top: 10px;"><b>Username</b><br>
    <input type="text" name="username" id="username" ><br>
    </p>

    <p style="text-align: left; padding-left: 105px; color: black;"><b>Email</b><br>
         <input type="text"  name="email" id="email" >
    

    <p style="text-align: left; padding-left: 100px; color: black;"><b>Password</b><br>
    <input type="password" placeholder="Password must contain 9 characters" name="password" id="password" ><br>
    </p>

    <p style="text-align: left; padding-left: 100px; color: black;"><b>Confirm Password</b><br>
    <input type="password" placeholder="Confirm your Password" name="confpassword" id="confpassword"  ><br>
    </p>
     
</p>

      <button type="submit" name="submit" id="submit" class="button" onclick="return validate()" >Create Account</button><br>

    <p style="font-size: 20px;">Have an account? <a href="login.html">Login Here</a></p>
</form>

   <script type="text/javascript">

      function validate() {

        var password = document.getElementById("password").value;
        var confpassword = document.getElementById("confpassword").value;

        if (password != confpassword) {
            alert("Password does not match to confirm password, try again.");
            return false;
        }
        

        else {
         alert("Register Complete, Click OK");
        }
        
        return true;
    }


   </script>

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
                        <p>© 2019 All Rights Reserved.</a></p>
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
</html>

