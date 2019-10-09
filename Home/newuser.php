<?php 
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

   $sub=$_POST['sub'];
   if($sub==TRUE)
   {
   //Login data enter
    $con=mysqli_connect('localhost','root','','login');
    $nam=$_POST['Usrnam'];
    $ema_il=$_POST['emil'];
    $pas=$_POST['paswrd'];
    $con_pas=$_POST['conpaswrd'];
    if($pas==$con_pas)
    {
     $prequer="SELECT *FROM login_details WHERE name='$nam'";
     $runq=mysqli_query($con,$prequer);
     $presnam=mysqli_fetch_assoc($runq);
       if($presnam['name']==$nam)
       {
          ?>
          <script type="text/javascript">
            alert("Userame alerady present");
            window.open('home.php','_self')
          </script>
          <?php
       }
       else
       {
         $query="INSERT INTO `login_details`(`name`, `email`,`password`) VALUES ('$nam','$ema_il','$pas')";
         $run=mysqli_query($con,$query);
          ?>
          <script type="text/javascript">
            alert("Account create");
            window.open('home.php','_self')
          </script>
          <?php
       }
    }
    else
    {
          ?>
          <script type="text/javascript">
            alert("password are not same");
            window.open('home.php','_self')
          </script>
          <?php
    }
    }
?>