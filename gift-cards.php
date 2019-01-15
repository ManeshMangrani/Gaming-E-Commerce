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
}?>


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
         .girf-card-main{
         padding: 40px
         }
         .gift-header-main{
         padding: 15px;
         background-color: #484848;
         border-radius: 4px;
         }
         .gift-header-main h3{
         color: white;
         }
         .gift-inner-main{
         padding: 20px;
         background-color: white;
         width: 100%;
         position: relative;
         color: black
         }
         .gift-search-box{
         width: 21%;
         }
         #searchInput{
         box-sizing: border-box;
         border-radius: 4px;
         font-size: 16px;
         background-color: white;
         background-image: url(images/searchicon.png);
         background-position: 10px 6px;
         background-repeat: no-repeat;
         padding: 12px 20px 12px 40px;
         }
         ul.pagination.pagination-md a{
         color: #428bca;
         font-size: 16px;
         font-weight: bold;
         }
         .gift-sortby-dropdown{
         width: 100%;
         }
         .gift-card-summary {
         float: left;
         line-height: 35px;
         overflow: hidden;
         width: 50%;
         }
         .gift-card-sort-btn{
         float: right;
         text-align: right;
         width: 50%;
         }
          .product-img{

              background-size: cover;
              background-repeat: no-repeat;
              background-position: center;
              width: 100%;
              height: 200px;
              margin-bottom: 12px
          }
          .product-tab{
              padding: 20px 0px 20px 0px;
              position: relative;
          }
          .md-20{
              width: 20%;
                float: right;
                padding: 10px;

          }
          .product-description{
                height: 40px;
                overflow: hidden;
                text-align: center;
                width: 70%;
                margin: 12px auto 2px auto;
          }
          .product-detail-btn a{
                color: #428bca;
                text-align: center;
                margin: auto;
                display: block;
          }
          .product-detail-btn a:hover{
              text-decoration: underline
          }
          .gift-amount{
              margin-top: 8px;
            text-align: center;
            font-size: 16px;

          }
          .gift-token{
             background-image: url(images/token.png);
            display: inline-block;
            padding-left: 20px;
            position: relative;
            height: 30px;
            background-repeat: no-repeat;

          }
          .gift-token span{
            top: -3px;
            position: absolute;
          }
          @media (max-width:920px){
              .md-20{
                  width: 25%;
              }
          }
          @media (max-width:760px){
              .md-20{
                  width: 33.33%;
              }
          }
          @media (max-width:540px){
              .md-20{
                  width: 50%;
              }
          }
          @media (max-width:460px){
              .md-20{
                  width: 100%;
              }
          }
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
                                    <a class="login-btn" data-toggle="modal" data-target="#modal-login" title="Login">                                        <i class="fa fa-user-circle" aria-hidden="true"></i>
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
                                                <div id="tablet-menu">
                                                   <div class="dropdown">
                                                      <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Our Offers            <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                      </button>
                                                      <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
                                                         <li  class="level0 nav-1 first level-top"><a href="games.html"  class="level-top" ><span>Games</span></a></li>
                                                         <li  class="level0 nav-3 last level-top"><a href="gift-cards.html"  class="level-top" ><span>Bundle Games</span></a></li>
                                                         <li class="level0 level-top">
                                                            <a href="#" class="level-top">
                                                            <span>2Game Club</span>
                                                            </a>
                                                         </li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mobile-menu">
                                          <div class="row">
                                             <div class="col-lg-12 col-md-12">
                                                <div class="mobile-menu-wrapper">
                                                   <div class="btn-mobile-wrapper">
                                                      <a class="btn-menu-mobile btn-sidebar" title="Categories"><span>Categories</span></a>
                                                   </div>
                                                   <div class="dropdown_sidebar">
                                                      <form class="navbar-form">
                                                         <div class="input-group">
                                                            <input type="search" class="form-control search-input" placeholder="Search...">
                                                            <span class="input-group-btn">
                                                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                                            </span>
                                                         </div>
                                                      </form>
                                                      <ul class="nav-mobile">
                                                         <li  class="level0  level-top"><a href="games.html"  class="level-top" ><span>Games</span></a></li>
                                                         <li  class="level0 level-top"><a href="gift-cards.html"  class="level-top" ><span>Bundle Games</span></a></li>
                                                         <li  class="level0 level-top"><a href="#"  class="level-top" ><span>2Game Club</span></a></li>
                                                      </ul>
                                                   </div>
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
                                                   <div class="icon-mini-cart">
                                                      <span class="cartpro-count">   <?php


                                                         if(isset($_GET['c']))
                                                         {
                                                            array_push($_SESSION['cart'], ''.$_GET['c'].'');

                                                         }
                                                        echo count($_SESSION['cart'])


                                                          ?></span>
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
         <div class="main-container col1-layout">
            <div class="main">
               <div class="girf-card-main">
                  <div class="gift-header-main">
                     <h3>GIFT CARDS</h3>
                  </div>
                  <div class="gift-inner-main">


                     <div style="width: 100%;position: relative;display: inline-block;">


                     </div>
                      <div class="gift-products">
                        <div class="row">
                            <div class="col-md-12">


                            <?php

                            include 'config.php' ;

                               $query = "select * from gift" ;



                          if($result = $conn->query($query) )
                          {


                           while ($row = $result->fetch_assoc()) {


                            ?>


                             <div class="md-20">
                                    <div class="product-tab">
                                        <div class="product-img" style=" background-image: url(binary/cards/<?php  echo $row['cimage'] ?>);"></div>
                                        <div class="product-description">
                                            <p><?php echo $row['cname']   ?></p>
                                        </div>

                                        <div class="gift-amount">
                                            <div class="gift-price"><?php echo $row['cprice']   ?></div>

                                        </div>
                                        <div class="buy-btn">
                                            <button type="submit" class="btn btn-block btn-success">Buy</button>
                                        </div>
                                    </div>
                                </div>


                            <?php

                           }

                         }




                            ?>





                            </div>
                        </div>
                      </div>
                  </div>
               </div>

            </div>
             <footer  style="background-color: #484848;color: #898989; padding: 20px;">
                  <p>© 2017 GAME.COM All Rights Reserved.</p>
               </footer>
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
