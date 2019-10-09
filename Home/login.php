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
      $data=mysqli_fetch_assoc($runname);
      session_start();
      $_SESSION['uid']=$data['name'];
      header("location:Dealer detail/detail.php");
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
