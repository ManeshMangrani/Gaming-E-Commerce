<?php


session_start() ;


if(isset($_SESSION['ad']))
{
    header('Location: index1.php');

}

include 'config.php' ;


if (isset($_POST['sub'])) {

   $name = $_POST['Name'];
    $name = mysqli_real_escape_string($conn, $name);
   $password = $_POST['password'];
   $password = mysqli_real_escape_string($conn, $password);
	//$password = md5($password) ;


   $query = "SELECT DISTINCT * from register_admin WHERE Name = '$name' AND password = '$password' ";

   if($result = $conn->query($query)){


      if ($result->num_rows > 0) {
         $user = $result->fetch_assoc();
         $_SESSION['ad'] = $user['id'];
         header('Location: index1.php');
         exit();
      }
      else {
        echo "<script>alert('password or Username is wrong')</script>";
      }
   }

}


?>



<style type="text/css">

 body
 {
    background-image: url(tom_clancys_ghost_recon_wildlands_season_pass-wallpaper-1366x768.jpg);
 }


</style>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2 style="color: black; margin-right: 200px">Admin Login</h2>

                 <br />
            </div>
        </div>
         <div  class="row " style="margin-right: 100px">

                  <div  class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>
                            </div>
                            <div class="panel-body">
                                <form action="index.php" method="post" >
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="Name" class="form-control" placeholder="Your Username " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="password"  placeholder="Your Password" />
                                        </div>

                                        <center>
                                     <button type="submit" name="sub"  class="btn btn-primary ">Login Now</button>
                                   </center>



                                    </form>
                                    <!-- <center> -->
                                      <!-- <a href="Register_admin.php"> -->
                                        <!-- <h3>New ?Register here</h3> -->
                                    <!-- </center> -->
                            </div>

                        </div>
                    </div>


        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
