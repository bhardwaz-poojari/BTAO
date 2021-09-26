<?php 
//Include Google Configuration File
include('gconfig.php');
session_start();
if(!isset($_SESSION['access_token']))
{
    //Create a URL to obtain user authorization
    $google_login_btn = '<p align="left"><a href="'.$google_client->createAuthUrl().'"><img src="signinbtn.png"  style="width:150px; box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.2), 0 6px 20px 0 rgba(255,255, 255, 0.19);
"  /></a></p>';
    
}
else
{
    header("location:index.php");
}
?>
<?php
require 'dbcon.php';
 
if(isset($_SESSION['loginid']) && isset($_SESSION['pass']))
 {
     header("Location:index.php");
 }

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

	if(isset($_POST['login']))
	{

	    	$v_loginid = mysqli_escape_string($con, $_POST['loginid']);
	    	$v_pass = mysqli_escape_string($con, $_POST['pass']);

		function validation($form_data)
		{
			$form_data = trim( stripcslashes( htmlspecialchars( $form_data ) ) );
			return $form_data;
		}

		$loginid = validation($v_loginid);
		$pass = validation($v_pass);

		if(!empty($loginid) && !empty($pass))
		{

			$email_check = "SELECT * FROM `users` WHERE `loginid`='$loginid' AND `pass`='$pass'";
        
			$email_check_query = mysqli_query($con,$email_check);

			if(mysqli_num_rows($email_check_query))
			{
			    $fetch = mysqli_fetch_assoc($email_check_query);
			    $_SESSION['loginid'] = $fetch['loginid'];
			    $_SESSION['pass'] = $fetch['pass'];
			    $_SESSION['name'] = $fetch['Name'];
			    if(isset($_POST['check']))
			    {
			        setcookie('loginid',$loginid,time()+(86400 * 30));
			        setcookie('pass',$pass,time()+(86400 * 30));
				}
				header("location:index.php");
			    
			}
			else
			{
				$msg = "<h4 align='center' style='color:red'>Invalid Email or Password</h4>";
			}
		}
		else
		{
			$msg = "<h4 align='center' style='color:orange'>Empty Field Found</h4>";
		}

	}

}


if($_SERVER['REQUEST_METHOD'] == 'POST')
{

	if(isset($_POST['signup']))
	{
	    if( $_POST['pass']==$_POST['cpass'])
	    {
            
		$v_lid = mysqli_escape_string($con, $_POST['loginid']);
		$v_pass = mysqli_escape_string($con, $_POST['pass']);
		$v_name = mysqli_escape_string($con, $_POST['name']);
	

		function validation($form_data)
		{
			$form_data = trim( stripcslashes( htmlspecialchars( $form_data ) ) );
			return $form_data;
		}

		$loginid = validation($v_lid);
		$pass = validation($v_pass);
		$Name=validation($v_name);

		if(!empty($loginid)  && !empty($pass))
		{

			$check = "SELECT `loginid` FROM `users` WHERE `loginid`='$loginid'";

			$check_query = mysqli_query($con, $check);

			if(mysqli_num_rows($check_query) > 0)
			{
				$msg = "<h3 align='center' style='color:orange;font-family:Fredoka One;'>This Email is Already Registered</h4>";
			}
			else
			{

				

				$insert = "INSERT INTO `users`(`loginid`,`pass`,`Name`) VALUES('$loginid','$pass','$Name')";

				if(mysqli_query($con, $insert))
				{
				    
				     $msg="<h4 align='center' style='color:green;' > Your Account Was Successfully Created!</h4>";
				    
				}
				else
				{
					$msg = "<h4 align='center' style='color:red;font-family:Fredoka One;'>You are not registered</h4>";
				}

			}

		}
		else
		{
			$msg = "<h3 align='center' style='color:orange;font-family:Fredoka One;background:white;'>Empty Field Found! Not Registerd</h4>";
		}

	}
	else
	{
	    $msg = "<h3 align='center' style='color:orange;font-family:Fredoka One;'>Not Registered Because Password Won't Match</h4>";
	}
	
	    
	}

}


?>
  
<!DOCTYPE html>
<html lang="en">
  <head>
       <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ef1ad96048927001269a6e6&product=sticky-share-buttons&cms=sop' async='async'></script>
    <title>BACHELOR TECHNOLOGY APPLICATION ORIENTED|| LOGIN||SIGNUP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="chatbotlogo.jpg" rel="icon">
    <link href="chatbotlogo.jpg" rel="apple-touch-icon">
    <!--Bootstrap4 Links-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <!--Bootstrap4 Links Closed-->
       <script src="https://www.btao.in/resources/js/bootstrap.bundle.min.js"></script>
        <script src="https://www.btao.in/BTAO/resources/js/jquery.easing.min.js"></script>
         <!--Material Boostsrap CDN LINKS STARTS HERE-->
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
          <!--Material Boostsrap CDN LINKS ENDS HERE-->
          <!--google fonts-->
          <link href="https://fonts.googleapis.com/css?family=ABeeZee|Acme&display=swap" rel="stylesheet">
              <!--google fonts closed-->
                 
              <link rel="stylesheet" href="scrollbarcss.css">
              
          <style>
          
     #header
     {
         height: 80px;
         transition: all 0.5s;
         z-index: 997;
         transition: all 0.5s;
         padding: 16px 0;
     }
     
    #header h1
    {
        font-size: 24px;
        margin: 0;
        padding: 10px 0;
        line-height: 1;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
        font-family: "Poppins", sans-serif;
        
    }
    #header h1 a:hover
    {
        text-decoration:none;
    }
   
         
     </style>
          

   
       
    
  </head>
  <body>
      
<script>
function home() {
    window.scroll(0,0);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 1 || this.readyState == 2 || this.readyState == 3) {
      document.getElementById("demo").innerHTML ="<div align=\'center\' style=\'padding:12%;margin-top:30%;\'><div  class=\'spinner-border  text-primary fast\' role=\'status\'><span class=\'sr-only\' style=\'color:rgb(19,0,26);\'>Loading...</span></div></div>";
           
       }
       if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "index.php", true);
  xhttp.send();
}

</script>

<script>
function innovativeapps() {
    window.scroll(0,0);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
         if (this.readyState == 1 || this.readyState == 2 || this.readyState == 3) {
      document.getElementById("demo").innerHTML ="<div align=\'center\' style=\'padding:12%;margin-top:30%;\'><div  class=\'spinner-border  text-primary fast\' role=\'status\'><span class=\'sr-only\' style=\'color:rgb(19,0,26);\'>Loading...</span></div></div>";
           
       }
       if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "innovativeapps.php", true);
  xhttp.send();
}

</script>
 
       <header id="header" class="fixed-top" style="background:rgb(19,0,26);">
           <div class="container">
               <h1 class="text-light"><a href="index.php" style="color:white;">BTAO<span>.</span></a></h1>
           </div>
        </header>
         <section id="login" style="background:rgb(19,0,26);padding:20px;">

    <div class="container">
      <div class="row d-flex align-items-center">
      <div align="center" class=" col-lg-6  py-5 py-lg-0 order-2 order-lg-1 animated bounceInRight slow" data-aos="fade-right">
        <br><br><br>
       <!-- <h2>We are team of talanted designers making websites with Bootstrap</h2>-->
       <?php echo @$msg; ?>
       <h1 align="center" class="text-light" style="font-family: 'Acme', sans-serif;">Login</h1>
          <form align="left" method="POST" style="padding:5px;">
              <input type="email" required class="form-control" placeholder="Email Id" name="loginid"><br>
              <input type="password" required  class="form-control" placeholder="Password" name="pass"><br>
              <p align="left" >  <input type="submit" class="btn btn-success" name="login" value="Login"><span align="center" style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OR</span><?php
    echo '<div align="center" style="margin-top:10px;">'.$google_login_btn . '</div>';
   ?></p>
              <br>
    
   <br>
              <h4><a href="#signup" style="color:white;">Not Have An Account?</a></h4>
              
          </form>
       
      </div>
      <div class="col-lg-6 order-1 order-lg-2 login-img animated bounceInLeft slow" data-aos="fade-left">
        <img src="logo.jpg" class="img-fluid" alt="">
      </div> 
    </div>
    </div>

  </section>
  <script>
      $( document ).ready(function() {
  new WOW().init();
});
/*Adding Multiple Animations Using Jquery*/
$( ".wow" ).addClass( "fadeInUp" );

//if you want to use the native html5 popups, than here is the solution

//JavaScript:

 

  </script>
  

  <section id="signup">
      <div class="container" style="padding:10%;">
          <br><br><br>
          <h1 align="left" style="font-family: 'Acme', sans-serif;">Signup</h1>
          <?php echo @$msg; ?>
          <div class="row d-flex align-items-center  wow zoomIn" data-wow-delay="0.6s">
              
          <form  align="left" method="POST" style="padding:5px;font-family: 'ABeeZee', sans-serif;">
              <input type="text" required  class="form-control" placeholder="Name" name="name"><br>
              <input type="email" required class="form-control" placeholder="Email Id" name="loginid"><br>
              <input type="password" required class="form-control" placeholder="Password" name="pass"><br>
              <input type="password" required  class="form-control" placeholder="Confirm Password" name="cpass"><br>
                 
              <input type="submit" class="btn btn-success" name="signup" value="Signup"><br><br>
              <h4><a href="#login">Already Have An Account?</a></h4>
          </form>
      
              
          </div>
      </div>
      
  </section>

  
    <!-- Footer -->
<footer class="page-footer font-small  pt-4" style="background:rgb(19,0,26);position:relative;bottom:0px;font-family: 'ABeeZee', sans-serif;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">BTAO</h6>
         <p>
          <a href="#" style="text-transform:capitalize;">Be Aware of your future think about technology apply it in your life observe the changes in your life that changes makes you brighter in your career</a>
        </p>
    
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Branches</h6>

 <p>
          <a href="/btao/cse">CSE</a>
        </p>
        <p>
          <a href="/btao/cse">ECE</a>
        </p>
        <p>
          <a href="/btao/cse">EEE</a>
        </p>
        <p>
          <a href="/btao/cse">CIVIL</a>
        </p>
        <p>
          <a href="/btao/cse">MECHANICAL</a>
        </p>
    

      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <?php 
        if(isset($_SESSION['loginid']))
        {
         //Nothing
        }
        else
        {
            echo ' <p>
          <a href="/btao/login.php#signup">Signup</a>
        </p>
        <p>
          <a href="/btao/login.php#login">Login</a>
        </p>';
        }
        ?> 
        
        <p>
          <a href="/btao/#abouts">About Us</a>
        </p>
       
      </div>

    
    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

       
        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="https://btao.in">
            <strong>BTAO TEAM</strong>
          </a>
        </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a href="https://www.facebook.com/BTAOTEAM/" class="btn-floating btn-sm rgba-white-slight mx-1"  target="blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://twitter.com/BTAO90779990?s=08" class="btn-floating btn-sm rgba-white-slight mx-1"  target="blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a  href="https://plus.google.com/u/0/108030690463741658732" class="btn-floating btn-sm rgba-white-slight mx-1"  target="blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.youtube.com/channel/UCiIyR5DNtRpSfx_oGuYZuXA" class="btn-floating btn-sm rgba-white-slight mx-1" target="blank">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->


</body>

</html>
      