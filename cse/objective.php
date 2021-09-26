<?php

$con=mysqli_connect("localhost","root","","btao");
session_start();
//$con=mysqli_connect("localhost","u732938000_btech","btechbtechbtech","u732938000_btech");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
       <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ef1ad96048927001269a6e6&product=sticky-share-buttons&cms=sop' async='async'></script>
      <script data-ad-client="ca-pub-3421794857501510" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <title>BACHELOR TECHNOLOGY APPLICATION ORIENTED|CSE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta meta name="viewport" content="width=device-width, user-scalable=no" /> 
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="/chatbotlogo.webp" rel="icon">
    <link href="/chatbotlogo.webp" rel="apple-touch-icon">
    <!--Bootstrap4 Links-->
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

     <!--Bootstrap4 Links Closed-->
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
         
            <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">

         <!--google fonts closed-->
       
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        
         
              <link rel="stylesheet" href="/scrollbarcss.css">
              
              
              
          <script>// JavaScript code
          function search_animal() { 
              let input = document.getElementById('searchbar').value 
              input=input.toLowerCase(); 
              let x = document.getElementsByClassName('services'); 
              for (i = 0; i < x.length; i++)
              {
                  if (!x[i].innerHTML.toLowerCase().includes(input))
                  {
                      x[i].style.display="none"; 
                      
                  } 
                  else
                  { 
                      x[i].style.display="list-item";				 
                      
                  } 
              }
              
          }
          </script>  
          
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
    #entrance
    {
        width: 100%;
        padding: 0 0 0 0;
        
    }
    #entrance h1
    {
        margin: 0 0 15px 0;
        font-size: 48px;
        font-weight: 700;
        line-height: 56px;
        color: #d2e0ed;
        font-family: "Poppins", sans-serif;
        
    }

    #entrance h2
    {
        color: #fff;
        margin-bottom: 30px;
        font-size: 22px;
        
    }
    #entrance .btn-get-started
    {
        color: #213b52;
        border-radius: 50px;
        padding: 8px 35px 10px 35px;
        border: 2px solid #fdc134;
        transition: all ease-in-out 0.3s;
        display: inline-block;
        background: #fdc134;
        
    }
        #entrance .btn-get-started:hover
        {
            background: transparent;
            color: #fff;
            
        }
      @media (max-width: 991px)
        {
            #entrance .entrance-img
            {
                text-align: center;
                
            }
            #entrance .entrance-img img {
                width: 50%;
                
            }
            
        }
        @media (max-width: 768px)
        {
            #entrance
            {
                -moz-text-align-last: center;
                text-align-last: center;
                
            }
            #entrance h1
            {
                font-size: 28px;
                line-height: 36px;
                
            }
            #entrance h2
            {
                font-size: 18px;
                line-height: 24px;
                margin-bottom: 30px;
                
            }
            #entrance .entrance-img img
            {
                width: 70%;
                
            }
            
        }
        @media (max-width: 575px)
        {
            #entrance .entrance-img img
            {
                width: 80%;
                
            }
            
        }
        .notice {
    padding: 15px;
    background-color: #fafafa;
    border-left: 6px solid #7f7f84;
    margin-bottom: 10px;
    -webkit-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
       -moz-box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
            box-shadow: 0 5px 8px -6px rgba(0,0,0,.2);
}
.notice-sm {
    padding: 10px;
    font-size: 80%;
}
.notice-lg {
    padding: 35px;
    font-size: large;
}
.notice-success {
    border-color: #80D651;
}
.notice-success>strong {
    color: #80D651;
}
.notice-info {
    border-color: #45ABCD;
}
.notice-info>strong {
    color: #45ABCD;
}
.notice-warning {
    border-color: #FEAF20;
}
.notice-warning>strong {
    color: #FEAF20;
}
.notice-danger {
    border-color: #d73814;
}
.notice-danger>strong {
    color: #d73814;
}
input[type='text']{
    background:rgb(19, 0, 26);
}
     
           
            @media screen and (max-width: 700px) {
 
                #usericon
                {
                    float:left;
                    font-size:40px;
                    padding:2px;
                }
                .userdash1
                {
                     display:block;
                }
                .userdash2
                {
                    display:none;
                }
            }
            @media screen and (min-width: 700px) {
 
                #usericon
                {
                   
                    font-size:60px;
                }
                .userdash1
            {
                display:none;
            }
            .userdash2
            {
                display:block;
            }
            }
            
       </style>
       
    

   
       
    
  </head>
  <body id="#top">
             
<div id="loader"  align="center" style="margin-top:30%;">
    <div class="spinner-border fast"  style="width: 3rem; height: 3rem;color:white;"  role="status">
  <span class="sr-only">Loading...</span>
</div>
 </div>
  <script> 
        document.onreadystatechange = function() { 
            if (document.readyState !== "complete") { 
                document.querySelector( 
                  "body").style.backgroundColor = "#1a001a"; 
                document.querySelector( 
                  "body").style.visibility = "hidden"; 
               

                document.querySelector( 
                  "#loader").style.visibility = "visible"; 
            } else { 
                document.querySelector( 
                  "#loader").style.display = "none"; 
                    document.querySelector( 
                  "body").style.backgroundColor = "white"; 
                document.querySelector( 
                  "body").style.visibility = "visible"; 
           

            } 
        }; 
    </script> 
       <!--Navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background:rgb(19,0,26);font-family: 'Josefin Sans', sans-serif;">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">BTAO</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/btao/">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
        <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Branches</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/btao/cse/index.php">CSE</a>
          <a class="dropdown-item" href="/btao/ece/index.php">ECE</a>
          <a class="dropdown-item" href="/btao/eee/index.php">EEE</a>
          <a class="dropdown-item" href="/btao/mech/index.php">MECH</a>
            <a class="dropdown-item" href="/btao/civil/index.php">CIVIL</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link"  onclick="innovativeapps()" data-toggle="collapse" data-target="#basicExampleNav">Innovative Apps</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/btao/#abouts">About us</a>
      </li>
     

    
  
 <?php
        if(isset($_SESSION['loginid']))
                        {
                            echo '
                                 <li class="nav-item avatar dropdown userdash1">
         <a  class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"  style="background:black;color:white;">Hello '.$_SESSION['name'].'</a>
         
        <div  class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          
          <a class="dropdown-item" href="/btao/logout.php">Logout</a>
          
        </div>
      </li>';          }
      else
      {
          echo '    <li class="nav-item dropdown userdash1">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="/btao/#signup" >SignUp</a>
         
          <a class="dropdown-item" href="/btao/#login" >Login</a>
         
        </div>
      </li>';
      }
      ?>
    
                      </ul>
                    <!-- Links -->

                     <ul class="navbar-nav nav-flex-icons">
                   
              
                        <?php
   if(isset($_SESSION['loginid']))
                        {
                            echo '
                                 <li class="nav-item avatar dropdown userdash2">
         <a  class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"  style="background:black;color:white;">Hello '.$_SESSION['name'].'</a>
         
        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
          aria-labelledby="navbarDropdownMenuLink-55">
          
          <a class="dropdown-item" href="/btao/logout.php">Logout</a>
          
        </div>
      </li>';          }
      else
      {
          echo '    <li class="nav-item dropdown userdash2">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
           <a class="dropdown-item" href="/btao//login.php#signup"  >SignUp</a>
         
          <a class="dropdown-item"  href="/btao//login.php#login" >Login</a>
         
        </div>
      </li>';
      }
      ?>
                     
                    </ul>
    
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
 
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

 <div id="demo">

       
  <?php
  if(isset($_POST['submit_btn']))
  {
      $subject=$_POST['subject'];
      $query1="select * from `whyweneedtostudy` where `subject`='$subject' AND `branch`='cse'" ;
      $query2="select * from `whyweneedtostudy` where `subject`='$subject' AND `branch`='allbranches'" ;
      $getdata1=mysqli_query($con, $query1);
      $getdata2=mysqli_query($con, $query2);
     if((mysqli_num_rows($getdata1)>0))
      {
          while($row=mysqli_fetch_array($getdata1, MYSQLI_ASSOC))
          {
              
          echo '<section id="abouts">
      <div class="container" style="padding:10%;">
        
          <div class="row d-flex align-items-center  wow zoomIn" >
              <h1 align="center"  style="font-family: Acme, sans-serif;" class="wow slideInUp">As a Department of CSE Why I Need to Study '.$row['subject'].' in B.tech?</h1>
              <p align="left" style="padding:5px;font-family: ABeeZee, sans-serif;"  class="wow bounceInUp" data-wow-delay="0.6s">
                  <i>'.$row['matter'].'
                  </i></p>
            
              
          </div>
      </div>
      
  </section>';
        
       
         }
           

    }
    else if($getdata2)
    {
          while($row=mysqli_fetch_array($getdata2, MYSQLI_ASSOC))
          {
              
          echo '<section id="abouts">
      <div class="container" style="padding:10%;">
        
          <div class="row d-flex align-items-center  wow zoomIn" >
              <h1 align="center"  style="font-family: Acme, sans-serif;" class="wow slideInUp">As a Department of CSE Why I Need to Study '.$row['subject'].' in B.tech?</h1>
              <p align="left" style="padding:5px;font-family: ABeeZee, sans-serif;"  class="wow bounceInUp" data-wow-delay="0.6s">
                  <i>'.$row['matter'].'
                  </i></p>
            
              
          </div>
      </div>
      
  </section>';
        
       
         }
           
    }
     else{
        echo '<h3 align="center" style="color:Orange">Not Found!</h3>';
    }
  }
  ?>
  

         <section id="entrance" style="background:rgb(19,0,26);">

    <div class="container">
      <div class="row d-flex align-items-center">
      <div class=" col-lg-6  py-5 py-lg-0 order-2 order-lg-1 animated bounceInRight fast">
            <?php
        if(isset($_SESSION['loginid']))
        {
            echo '<h2 align="left" style="color:white">Hello '.$_SESSION['name'].'</h2>';
        }
        else
        {
            echo '<h2 align="left" style="color:white">Hello Young Aspirant </h2>';
            
        }
        ?>
        <h1 style="float:left;">As A Department of CSE Why I Need To Study   </h1>
        <script>
        function myFunction()
        {
            window.scroll(0,500);
        }
           
        </script>
        <form  onsubmit="myFunction()" method="POST" style="font-family: 'Josefin Sans', sans-serif;">
    <select  name="subject" class="form-control" required>
    <option hidden>Select Subject</option>
    <?php
    $query1="select * from `whyweneedtostudy` where `branch`='cse'" ;
    $query2="select * from `whyweneedtostudy` where `branch`='allbranches'";
    $getdata1=mysqli_query($con, $query1);
    $getdata2=mysqli_query($con, $query2);
    if((mysqli_num_rows($getdata1)>0) || (mysqli_num_rows($getdata2)>0))
    {
        while($row1=mysqli_fetch_array($getdata1, MYSQLI_ASSOC))
        {
            echo '<option>'.$row1['subject'].'</option>'; 
        }
        while($row2=mysqli_fetch_array($getdata2, MYSQLI_ASSOC))
        {
            echo '<option>'.$row2['subject'].'</option>'; 
        }
    }
    else
    {
        echo '<h3 align="center" style="color:Orange">Not Found!</h3>';
    }
    ?>
   </select>
  <br>

       <!-- <h2>We are team of talanted designers making websites with Bootstrap</h2>
          <h2>May Change Your Life</h2>-->
        <input type="submit" class="btn-get-started" name="submit_btn" style="font-family: 'Josefin Sans', sans-serif;" value="Let's Know">
         </form>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 entrance-img animated bounceInLeft fast" data-aos="fade-left">
        <img src="cse.webp" class="img-fluid" alt="">
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
  </script>

   <section style="padding:100px;font-family: 'Josefin Sans', sans-serif;" class="wow bounceIn" data-wow-delay="0.6s">
     <h3 align="left">Important Links</h3>
     <a href="materials.php" class="btn btn-success btn-lg">MATERIALS</a>
     <a href="ppts.php" class="btn btn-success btn-lg">PPT'S</a>
     <a href="#entrance" class="btn btn-danger btn-lg">OBJECTIVES</a>
 </section>
 
 
 
 
  
 </div>
 

  
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
        <a href="/btao/cse/">CSE</a>
      </p>
      <p>
        <a href="/btao/ece/">ECE</a>
      </p>
        <a href="/btao/eee/">EEE</a>
      </p>
      <p>
        <a href="/btao/civil/">CIVIL</a>
      </p>
      <p>
        <a href="/btao/mech">MECHANICAL</a>
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
        <a onclick="innovativeapps()">Innovative Apps</a>
      </p>
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
<!-- Footer -->
</body>

</html>
      