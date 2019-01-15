

<?php

session_start();
if(!isset($_SESSION['ad'])) {
  header('Location: index.php');
  exit();
}
if($_SERVER['REQUEST_METHOD'] == "GET"){
  if(isset($_GET['logout'])){
    if((int)$_GET['logout'] == 1){
      unset($_SESSION['ad']);
      header('Location: index.php');
      exit();
    }
  }
}









if (isset($_POST['submit2']))
 {
  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"games");
  mysqli_query($link,"insert into register_admin values('','$_POST[Name]','$_POST[password]','$_POST[email]','$_POST[Address]','$_POST[city]','$_POST[pincode]','$_POST[contact]')")
  ?>
  <script type="text/javascript">

  alert("sucessfully You Register");
  </script>
  <?php
}


?>










<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Game Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->

        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access :  8th August, 2017 &nbsp; <a href="index1.php?logout=1" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
             <?php include 'header.php' ?>


            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
              <center>
              <h1>   Enter Details To Admin_login </h1>
            </center>
              <div class="panel-body">
                  <form action="" method="post" name="form1" >
                         <br />
                       <div class="form-group input-group">
                              <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                              <input type="text" name="Name" class="form-control" placeholder="Your Username " required/>
                          </div>
                          <br />
                              <div class="form-group input-group">
                              <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                              <input type="password" class="form-control" name="password"  placeholder="Your Password" required />
                          </div>

                          <br />
                          <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                        <input type="text" class="form-control" name="email"  placeholder="email" required />
                    </div>

                    <br />
                    <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                  <input type="text" class="form-control" name="Address"  placeholder="Address" required />
              </div>
              <br />
              <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
            <input type="text" class="form-control" name="city"  placeholder="city" required />
        </div>
        <br />
        <div class="form-group input-group">
      <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
      <input type="text" class="form-control" name="pincode"  placeholder="pincode" required />
  </div>
  <br />
  <div class="form-group input-group">
<span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
<input type="text" class="form-control" name="contact"  placeholder="contact" required />
</div>
<br />

<center>
  <button type="submit" name="submit2"  class="btn btn-primary ">Register_admin</button>
</center>

                      </form>
              </div>
                  </div>



    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
