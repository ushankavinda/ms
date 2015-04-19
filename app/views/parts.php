<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        
        <!-- Angular-->
        <script src="<?php echo asset('_/angular/angular.min.js'); ?>"></script>
        <script src="<?php echo asset('_/js/myscripts.js'); ?>"></script>
        <!--Bootstrap-->
        <link type="text/css" rel="stylesheet" href="<?php echo asset('_/css/bootstrap.min.css'); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo asset('_/css/mystyle.css'); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo asset('_/css/font-awesome.css'); ?>">
        <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
        
    </head>
    <body id="home">
        
        <div class="container-fluid" id="header">
           
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1" style="padding-right:0;padding-left: 0;">
                        <header class="clearfix" >
                            <div class="col-lg-8" style="padding-right:0;padding-left: 0;">
                                <h1>MS Tools</h1>
                            </div>
                            <div class="col-lg-4 visible-lg" style="padding-right:0;padding-left: 0;">
                                <form>
                                    <div class="form-group" style="margin-top: 2em;">
                                        <input ng-model="search" type="text" class="form-control" placeholder="Search...">
                                        
                                    </div>
                                </form>
                            </div>
                        </header>
                        
                        
                        
                    </div> 
                </div>
            </div>
        </div>
        
        <div class="container-fluid" id="content-background" style="padding-bottom: 4em;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1" id="content">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <div class="container collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="text-center"><a href="/">Home</a></li>
                                            <li class="text-center"><a href="#">About Us</a></li>
                                            <li class="dropdown text-center">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                                                   role="button" aria-expanded="false">Products 
                                                    <span class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">  
                                                     <li class="text-center"><a href="#">Accesories</a></li>
                                                     <li class="divider text-center"></li>
                                                     <li class="text-center"><a href="parts">Parts</a></li>
                                                 </ul>
                                            </li>
                                            <li class="text-center"><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>                   
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="<?php echo asset('_/images/slide1.jpg'); ?>" width="100%" alt="...">
                                </div>
                                <div class="item">
                                    <img src="<?php echo asset('_/images/slide1.jpg'); ?>" width="100%" alt="...">
                                </div>
                            </div>

                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        
                       
                        <div class="col-lg-3" ng-controller="MyController">
                            <div class="panel panel-primary" id="productPanel">
                              <div class="panel-heading" id="panelHead">
                              <h3 class="panel-title">Parts</h3>
                            </div>
                            <div class="panel-body">
                              <ul class="list-group">
                                  <li class="list-group-item" ng-repeat="item in searchData | filter: { catergory: '0' } "> <a href="#" ng-click="myFilter =  item.name ">{{ item.name }}</a></li>

                              </ul>
                            </div>
                          </div>
                            
                        </div>
                        
                        <div class="col-lg-9" ng-controller="MyController">
                            <div class="panel panel-primary" id="productPanel">
                              <div class="panel-heading" id="panelHead">
                              <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb" ng-repeat="itemm in searchData | filter: { catergory: '0' }| filter: search | filter:myFilter ">
                                    <a class="thumbnail" href="#">
                                       
                                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
               
                </div>      
               
            </div>
        </div>
        
        
        
        <footer class="container-fluid" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1" style="padding-right:0;padding-left: 0;">
                       <div class="col-xs-6 col-sm-3">
                  <div class="row">
                     <h3>Navigate</h3>
                  </div>
                  <div class="row">
                     <a href="index.html">
                        <p>Home </p>
                     </a>
                  </div>
                  <div class="row">
                     <a href="power_genarator.html">
                        <p>About Us</p>
                     </a>
                  </div>
                  <div class="row">
                     <a href="aboutus.html">
                        <p>Accessories</p>
                     </a>
                  </div>
                  <div class="row">
                     <a href="contact.html">
                        <p>Parts</p>
                     </a>
                  </div>
                  <div class="row">
                     <a href="contact.html">
                        <p>Contact Us</p>
                     </a>
                  </div>
               </div>
               <div class="col-xs-6 col-sm-3">
                  <div class="row">
                     <h3>Follow us</h3>
                  </div>
                  <div class="row">
                        <p> <a href="https://www.facebook.com/"><span class="fa-stack fa-lg">
                           <i class="fa fa-square-o fa-stack-2x"></i>
                           <i class="fa fa-facebook fa-stack-1x"></i>
                            </a></span>
                            <a href="https://www.facebook.com/"><span class="fa-stack fa-lg">
                           <i class="fa fa-square-o fa-stack-2x"></i>
                           <i class="fa fa-twitter fa-stack-1x"></i>
                           </a></span>
                            <a href="https://www.facebook.com/"><span class="fa-stack fa-lg">
                           <i class="fa fa-square-o fa-stack-2x"></i>
                           <i class="fa fa-google-plus fa-stack-1x"></i>
                           </a></span>
                            
                        </p>
                 
                  </div>
               </div>
               <div class="col-xs-6 col-sm-3 hidden-xs">
                  <div class="row">
                     <h3>Contact</h3>
                  </div>
                  <div class="row">
                     <address>
                        125/B Bokundandara Road,<br>
                        Mahuludunna,<br>
                        Piliyandala.<br>
                        Sri Lanka.<br>
                        Hotline : (011) 2 709-900
                     </address>
                  </div>
               </div>
               <div class="col-xs-6 col-sm-3 hidden-xs">
                  <div class="row">
                     <h3></h3>
                  </div>
                   <div class="row"><h1>MS Tools Logo</h1></div>
               </div>
                    </div>
                </div>
            </div>
            
            <div class="row" id="copyright">
            <p class="text-right" style="margin-right:2%;font-size: 11px;">Copyright © 2014 by ArtLine Industrial Systems (Pvt) Ltd. | Developed by <a href="http://eyes.lk/">eyes.lk</a></p>
         </div>
        </footer>
        
        <script src="<?php echo asset('_/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo asset('_/js/bootstrap.min.js'); ?>"></script>
        

        <script>
          $(document).ready(function() {
            $('#myCarousel').carousel({
                interval: 7000
            });
    
            $('#myCarousel').on('slid.bs.carousel', function() {
                //alert("slid");
            });
          });
        </script>
    </body>
</html>
