
<?php



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





<style type="text/css">

 body
 {
    background-image: url(tom_clancys_ghost_recon_wildlands_season_pass-wallpaper-1366x768.jpg);
 }


</style>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">>
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
                        <strong>   Enter Details To Admin_login </strong>
                            </div>
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

                <button type="submit" name="submit2"  class="btn btn-primary ">Register_admin</button>

                                    </form>
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


    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
