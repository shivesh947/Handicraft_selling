<?php
    error_reporting(0);
    // Report runtime errors
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    // Report all errors
    error_reporting(E_ALL);
    // Same as error_reporting(E_ALL);
    ini_set("error_reporting", E_ALL);
    // Report all errors except E_NOTICE
    error_reporting(E_ALL & ~E_NOTICE);
session_start();
if($_SESSION['uid'])
{
    header('location:Dealer detail/detail.php');
}
?>


<!DOCTYPE html>
<html>
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat+Brush">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/css/-Fixed-Navbar-start-with-transparency-background-BS4-.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4-Navbar-with-Logo-Image-Brand-Name-and-Responsive-Menu.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/MUSA_navbar-metro.css">
    <link rel="stylesheet" href="assets/css/SO-Floating-Nav_v10.css">
    <link rel="stylesheet" href="assets/css/sticky-dark-top-nav-with-dropdown.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="stylesheet" href="assets/css/animatecss.css">
    <link rel="stylesheet" href="assets/css/hovercss.css">
    <link rel="stylesheet" href="assets/css/shakecss.css">
    <link rel="stylesheet" href="assets/css/mynew.css">
</head>


<style type="text/css">
  .febx
  {
    width: 100%;
  }
  .nav-item 
  {
    padding: 0px 20px;
  }
</style>


<body bgcolor="#eacf8087">
    <!-- ================================================================================================================== -->
    <div>
        <header style="margin-top: -44px;">
            <nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top border-bottom border-light" style="margin-top: -40px;">
                <div class="container-fluid"><a class="navbar-brand text-success" href="#header"><i class="fa fa-ticket fa-2x"></i>&nbsp;VIREKHA</a><button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navcol-1"><span></span><span></span><span></span></button>
                    <div
                        class="collapse navbar-collapse bg-dark p-4" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item , hvr-float-shadow" role="presentation"><a class="nav-link" href="#home">Login & Signup</a></li>
                            <li class="nav-item , hvr-float-shadow" role="presentation"><a class="nav-link" href="Categories/Categories.php">Categories</a></li>
                            <li class="nav-item , hvr-float-shadow" role="presentation"><a class="nav-link" href="About/About.php">About us</a></li>
                            <li class="nav-item , hvr-float-shadow" role="presentation"><a class="nav-link" href="Portfolio/index.html">Portfolio</a></li>
                            <li class="nav-item , hvr-float-shadow" role="presentation"><a class="nav-link" href="#foot">Contact</a></li>
                        
                                <form action="home.php" method="POST">
                                <input type="text" name="Usr_alrdy" id="Usr_alrdy" placeholder="Username" style="width: 131px;">
                                <input type="password" name="pas_aledy" id="pas_aledy" placeholder="Password" style="width: 131px;">
                                <input type="submit" width="30px" id="log_sb" value="Log in" name="log_sb">
                                </form>  
                        </ul>         
                    </div>
               </div>
            </nav>
        </header>
    </div>
    <!-- ================================================================================================================== -->
    <div style="height:100vh; background-image:url(assets/img/Back.jpg);background-repeat: no-repeat; background-size: cover;">

        <div class="text-center w-100 text-white" id="registerme">
              
             <form class="loginfrm" id="num" action="newuser.php" method="POST">
                <input  type="text" class="inp_txt hvr-float-shadow" name="Usrnam" id="Usrnam" placeholder="USERNAME" maxlength="15" required br><br><br>
                <input type="email" class="inp_txt hvr-float-shadow" name="emil" id="emil" placeholder="Email" maxlength="30" required><br><br>
                <input type="password" class="inp_txt hvr-float-shadow"  name="paswrd" id="paswrd" placeholder="Password" minlength="10" maxlength="15" required><br><br>
                <input type="password"  class="inp_txt hvr-float-shadow"  name="conpaswrd" id="conpaswrd" placeholder="RE-ENTER Password" minlength="10"  maxlength="15"  required><br><br>
                <input type="submit" name="sub" class="inp_txt">
            </form>
        </div>

    </div>


    <!-- ================================================================================================================== -->
    <div id="foot" class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Designing</a></li>
                            <li style="color:rgb(146,157,164);"></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3 style="font-size:25px;">VIREKHA</h3>
                        <p>Give me a miss call on&nbsp;</p>
                        <p>+896884748<br></p>
                        <p>guptashiv84@gmail.com</p>
                    </div>
                    <div class="col item social "><a href="#"><i class="icon ion-social-facebook "></i></a><a href="#"><i class="icon ion-social-twitter "></i></a><a href="#"><i class="icon ion-social-snapchat "></i></a><a href="#"><i class="icon ion-social-instagram "></i></a></div>
                </div>
                <p class="copyright">Virekha © 2018</p>
            </div>
        </footer>
    </div>
    <!-- ================================================================================================================== -->

<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Fixed-Navbar-start-with-transparency-background-BS4-.js"></script>
    <script src="assets/js/Bootstrap-4-Navbar-with-Logo-Image-Brand-Name-and-Responsive-Menu.js"></script>
    <script src="assets/js/Bootstrap-4-Navbar-with-Logo-Image-Brand-Name-and-Responsive-Menu.js"></script>
    <script src="assets/js/Bootstrap-4-Navbar-with-Logo-Image-Brand-Name-and-Responsive-Menu.js"></script>
    <script src="assets/js/MUSA_navbar-metro.js"></script>
    <script src="assets/js/SO-Floating-Nav_v10.js">
    
</script>
</body>

</html>
<?php
 
    //login here
    // Turn off error reporting
    error_reporting(0);
    // Report runtime errors
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    // Report all errors
    error_reporting(E_ALL);
    // Same as error_reporting(E_ALL);
    ini_set("error_reporting", E_ALL);
    // Report all errors except E_NOTICE
    error_reporting(E_ALL & ~E_NOTICE);

    $con=mysqli_connect('localhost','root','','login');
    if(isset($_POST['log_sb']))
   {
    $nam=$_POST['Usr_alrdy'];
    $pas=$_POST['pas_aledy'];

    $quer="SELECT *FROM login_details WHERE name='$nam' AND password='$pas'";
    $runname=mysqli_query($con,$quer);
    $comrun=mysqli_num_rows($runname);
    //comrun return numbers of rows
    if($comrun<1)
    {
      ?>
       <script type="text/javascript">
         alert("wrong id and password");
         window.open('home.php','_self')
       </script>
      <?php
    }
    else
    {
    ?><script>document.getElementById('log_sb').click(); </script><?php
      $data=mysqli_fetch_assoc($runname);
      header("location:Dealer detail/detail.php");
      $_SESSION['uid']=$data['name'];
      
    }
  }

    /*if($data['name']==$nam&&$data['password']==$pas)
    {
        header("location:Dealer detail/detail.php");
    }
    else
    {
           header("location:home.php");
    } 
    */
?>