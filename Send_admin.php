

<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == "GET"){
  if(isset($_GET['logout'])){
    if((int)$_GET['logout'] == 1){
      unset($_SESSION['is']);
      header('Location: index.php');
      exit();
    }
  }
}

?>


<?php


include 'config.php' ;



 if(!isset($_SESSION['cart']))
 {

    $_SESSION['cart'] = array();


 }

?>








<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Title</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
      <style>
         /*==GENERAL==*/
         body{
         font-family:sans-serif;
         font-size: 13px;
         color: #999999;
         background-color: #222222;
         background-repeat: no-repeat;
         background-position: center top;
         background-attachment: fixed;
         background-image:linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url(images/1.jpg);
         }
         body a{
         color: #D1D1D1;
         }
         #loading-mask {
         background-color: white;
         height: 100%;
         left: 0;
         position: fixed;
         top: 0;
         width: 100%;
         z-index: 9999;
         background-image: url(images/loader2.gif);
         background-position: center;
         background-repeat: no-repeat;
         }
         button:hover{
         color: white !important
         }
         /* HOME STYLE 1 */
         .home-style1 {
         margin-top: 40px;
         position: relative
         }
         .home-style1-img{
         background-image: url(images/u.jpg);
         min-height: 600px;
         background-size: cover;
         background-repeat: no-repeat;
         background-position: center;
         }
         .home-style1-inner-content{
         position: absolute;
         background-color: rgba(0, 0, 0, 0.5);
         width: 50%;
         font-size: 16px;
         right: 2%;
         bottom: 10%;
         color: white;
         padding: 12px;
         text-align: justify;
         }
         @media (max-width:900px){
         .home-style1-inner-content{
         position: absolute;
         background-color: rgba(0, 0, 0, 0.5);
         width: 50%;
         font-size: 13px;
         right: 2%;
         bottom: 10%;
         color: white;
         padding: 12px;
         text-align: justify;
         }
         }
         @media (max-width:900px){
         .home-style1-inner-content{
         font-size: 13px;
         }
         .home-style1-img{
         min-height: 500px
         }
         }
         @media (max-width:750px){
         .home-style1-inner-content{
         font-size: 11px;
         }
         .home-style1-img{
         min-height: 400px
         }
         }
         @media (max-width:500px){
         .home-style1-inner-content{
         font-size: 7px;
         }
         .home-style1-img{
         min-height: 300px
         }
         }
         /* END HOME STYLE 1*/
         .logo img{
         width: 205px
         }
         /* HOME STYLE 2*/
         .home-style2{
         margin-top: 40px;
         margin-bottom: 40px;
         position: relative
         }
         .home-style2-header{
         padding: 10px;
         display: inline-block;
         border-radius: 4px;
         background-color: rgba(7, 8, 12, 0.43);
         }
         .product-grid {
         width: 100%;
         padding: 0px 40px 0px 40px;
         }
         .product-item{
         width: 20%;
         display: inline-block;
         float: left;
         }
         .tabs-item{

         height: 320px;
         position: relative;
         margin: 10px;
         background-size: cover;
         background-repeat: no-repeat;
         background-position: center;
         }
         .tabs-item label{
         position: absolute;
         background-color: #413475;
         color: white !important;
         top: 3%;
         padding: 1px 11px !important;
         border-top-right-radius: 8px;
         border-bottom-right-radius: 8px;
         }
         .tabs-info{
         position: absolute;
         bottom: 0px;
         width: 100%;
         min-height: 30%;
         background: rgba(40, 40, 40, 0.65);
         }
         .btn-cart{
         background-color: #413475;
         color: white;
         height: 50px;
         width: 60px;
         }
         .product-cart{
         margin-left: auto;
         background-color: #493b82;
         }
         .product-price{
         width: auto;
         margin: 0px 5px 0px 5px;
         font-size: 20px;
         color: white;
         padding: 8px
         }
         .product-info-cart{
         background: linear-gradient(#444444, #222222);
         display: flex;
         position: absolute;
         bottom: 0;
         width: 100%;
         }
         .product-name{
         font-size: 100%;
         color: white;
         position: absolute;
         top: 10%;
         left: 0px;
         right: 0px;
         text-align: center;
         }
         .tabs-info:hover {
         background-color: #413475 !important;
         transition: 0.8s
         }
         @media (max-width:992px){
         .product-item {
         width: 25%;
         display: inline-block;
         float: left;
         }
         }
         @media (max-width:840px){
         .product-item {
         width: 33.315%;
         display: inline-block;
         float: left;
         }
         }
         @media (max-width:660px){
         .product-item {
         width: 50%;
         display: inline-block;
         float: left;
         }
         }
         @media (max-width:490px){
         .product-item {
         width: 100%;
         display: inline-block;
         float: left;
         }
         }
         /* END HOME STYLE 2*/
      </style>
   </head>
   <body class="cms-home boxed-layout ">
      <div id="loading-mask"> </div>
      <div class="wrapper">
         <div class="page">
            <div class="header-container header-style-1">
               <div class="header">
                  <div class="header-inner">
                     <div class="header-top">
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-4">
                                 <div class="socials-wrap">
                                    <ul>
                                       <li class="li-social facebook-social">
                                          <a title="" href="#" target="_blank">
                                          <span class="fa fa-facebook icon-social"></span>
                                          <span class="name-social"></span>
                                          </a>
                                       </li>
                                       <li class="li-social twitter-social">
                                          <a title="" href="#" target="_blank">
                                          <span class="fa fa-twitter icon-social"></span>
                                          <span class="name-social"></span>
                                          </a>
                                       </li>
                                       <li class="li-social youtube-social">
                                          <a title="" href="#" target="_blank">
                                          <span class="fa fa-youtube icon-social"></span>
                                          <span class="name-social"></span>
                                          </a>
                                       </li>
                                       <li class="li-social instagram-social">
                                          <a title="" href="#" target="_blank">
                                          <span class="fa fa-instagram icon-social"></span>
                                          <span class="name-social"></span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-8 customer-wrapper">
                                 <div class="header-link-right">
                                    <div class="block-account-cusomer block-action">
                                       <div class="toplink-cus cus-btn">
                                          <a class="login-btn login-btn-mobile" href="#" title="Login">Login</a>
                                          <a class="login-btn" data-toggle="modal" data-target="#modal-login" title="Login">                                         <i class="fa fa-user-circle" aria-hidden="true"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>

                                 <a href="index.php?logout=1" style="margin-left: 500px"><?php


                        if(isset($_SESSION['is']))
                        {
                           echo "logout";
                        }
                                 ?></a>
                                 <div class="header-link-right">
                                        <div class="block-account-cusomer block-action">
                                           <div class="toplink-cus cus-btn">
                                              <a href="Register.php" title="Register">Register</a>
                                              <a  title="Register">
                                              <!-- <i class="fa fa-user-circle" aria-hidden="true"></i> -->
                                              </a>
                                           </div>
                                        </div>
                                     </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="header-bottom">
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-12 col-md-12">
                                 <div class="header-bottom-content">
                                    <div class="logo-wrapper ">
                                       <h1 class="logo">
                                          <a href="index.php" class="logo">
                                          <img src="images/store-logo.png" width="205px" />
                                          </a>
                                          <a class="logo-small" href="#">
                                          <img src="images/store-logo.png" />
                                          </a>
                                       </h1>
                                    </div>
                                    <div class="yt-menu">
                                       <div class="menu-under">
                                          <div class="menu-larger">
                                             <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                   <div class="nav-container">
                                                       <?php include 'head.php' ; ?>
                                                   </div>

                                                </div>
                                             </div>
                                          </div>

                                          <div class="search-minicart-header">
                                             <div class="search-box-button">
                                                <form class="navbar-form" >
                                                   <div class="input-group">
                                                      <input id="search" type="search" class="form-control search-input" placeholder="Search...">
                                                      <span class="input-group-btn">
                                                      <button class="btn btn-default"><i class="glyphicon glyphicon-search"></i>
                                                      </button>
                                                      </span>
                                                   </div>
                                                </form>
                                             </div>
                                             <div class="minicart-header">
                                                <div id="sm_cartpro" class="sm-cartpro">
                                                   <div class="cartpro-title">
                                                      <a href="cart.php" class="icon-mini-cart">
                                                         <span class="cartpro-count">
                                                         <?php


                                                         if(isset($_GET['c']))
                                                         {
                                                            array_push($_SESSION['cart'], ''.$_GET['c'].'');

                                                         }
                                                        echo count($_SESSION['cart'])


                                                          ?>
                                                         </span>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- LOGIN MODAL -->
               <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <!-- Modal content-->
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                           <h4 class="modal-title">LOGIN</h4>
                        </div>
                        <div class="modal-body">
                     <form action="index.php" method="post">
                              <div class="form-group">
                                 <label for="email">Username:</label>
                                 <input name="name"  class="form-control" id="email">
                              </div>
                              <div class="form-group">
                                 <label for="pwd">Password:</label>
                                 <input name="pass" type="password" class="form-control" id="pwd">
                              </div>
                              <div class="checkbox">
                                 <label><input type="checkbox"> Remember me</label>
                              </div>
                              <button name="sub" type="submit" class="btn btn-default">Submit</button>
                           </form>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END LOGIN MODAL -->
            </div>


            <div class="table-responsive">


           <table class="table">

           <thead>


            <tr>

            <th>Product Id</th>
            <th>Product Name</th>
            <th>Unit Price</th>
            <th>Total Price</th>



            </tr>

           </thead>


       <tbody>


        <?php




       for($i=0; $i < count($_SESSION['cart']) ; $i++)
        {
          $x =  $_SESSION['cart'][$i] ;


          $query = "select * from game where game_id = '$x'" ;

                 $result = $conn->query($query) ;


               $row = $result->fetch_assoc() ;


               $y = $row['game_id'] ;


               if(empty($y))
               {
                     $query = "select * from gift where gift_id = '$x'" ;

                 $result = $conn->query($query) ;


               $row = $result->fetch_assoc() ;



          ?>

        <tr>

        <td><?php echo $row['gift_id']  ?></td>
        <td><?php echo $row['cname']  ?></td>


        <td><?php echo $row['cprice']  ?></td>
        <td><?php echo $row['cprice']  ?></td>

        </tr>

          <?php


               }

               else

               {

          ?>

        <tr>

        <td><?php echo $row['game_id']  ?></td>
        <td><?php echo $row['gname']  ?></td>


        <td><?php echo $row['gprice']  ?></td>
        <td><?php echo $row['gprice']  ?></td>

        </tr>

          <?php
               }



        }



        ?>











</tbody>






           </table>


 <h3>Grand Total</h1>

 <a href="#" class="button btn btn-primary" onclick="alert('Your order successfully sent The admin')">Send the order</a>
<a href="index.php" class="button btn btn-primary">Continue Shopping</a>
<a href="#" class="button btn btn-primary" onclick="window.print();">Print DATA</a>
            </div>

               <footer  style="background-color: #484848;color: #898989; padding: 20px;">
                  <p>© 2017 2game.com. All Rights Reserved.</p>
               </footer>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/enfinity.js"></script>
      <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
      <script type="text/javascript" src="js/jquery-noConflict.js"></script>
      <script src="js/bootstrap_min.js"></script>
      <script type="text/javascript">
         window.onload=function() {
             document.getElementById('loading-mask').style.display='none';
           }

           jQuery(function()
                        {

                        jQuery('[id^=enfinity_]').each(function()
                        {
                        var slideHtmlId = jQuery(this).attr('id');
                        jQuery('#' + slideHtmlId).each(function()
                        {
                        var e = jQuery('#1_'+slideHtmlId, this),
                        t = parseFloat(e.attr('data-time')),
                        a = parseFloat(e.attr('data-transperiod')),
                        i = 'true' == e.attr('data-prevnext') ? jQuery('.filmore_prev', this) : '',
                        r = 'true' == e.attr('data-prevnext') ? jQuery('.filmore_next', this) : '',
                        o = 'true' == e.attr('data-playpause') ? jQuery('.filmore_pause', this) : '',
                        s = 'true' == e.attr('data-playpause') ? jQuery('.filmore_play', this) : '',
                        n = 'true' == e.attr('data-pagination') ? jQuery('.filmore_pagination', this) : '',
                        u = jQuery('.filmore_loader', this),
                        l = 'true' == e.attr('data-autoadvance') ? !0 : !1;
                        e.filmore(
                        {
                            time: t,
                            transPeriod: a,
                            prev: i,
                            next: r,
                            pause: o,
                            play: s,
                            pagination: n,
                            loader: u,
                            autoadv: l,
                            slide_id: '#'+slideHtmlId
                        })
                        });
                        });


                        });
         jQuery(document).ready(function($) {
               $('.dropdown_sidebar .nav-mobile > li').has('ul').append( '<span class="touch-button"><span>open</span></span>' );

               $('.btn-sidebar').click(function(){
                   $('.dropdown_sidebar').toggleClass('active');
                   $(this).toggleClass('active active_btn');
                   $('body').toggleClass('active_sidebar');
               });

               $('.touch-button').click(function(){
                   $(this).prev().slideToggle(200);
                   $(this).toggleClass('active');
                   $(this).parent().toggleClass('parent-active');
               });

            });
         jQuery(document).ready(function($){
              	$window = $(window);
              	if($('.header-bottom').length){
              		menu_offset_top = $('.header-bottom').offset().top;
              		function processScroll() {
              			var scrollTop = $window.scrollTop();
              			if ( scrollTop >= menu_offset_top) {
              				$('.header-bottom').addClass('menu-on-top');
              			} else if (scrollTop <= menu_offset_top) {
              				$('.header-bottom').removeClass('menu-on-top');
              			}
              		}
              		processScroll();
              		$window.scroll(function(){
              			processScroll();
              		});
              	}
              });

      </script>

      <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/598eeec5dbb01a218b4dc0b4/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

   </body>
</html>
