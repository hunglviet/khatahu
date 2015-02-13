<?php
if (!defined("KHATAHU")) {
    echo "Vui lòng liên hệ quản trị viên";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Globalnews - Home</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- bootstrap styles-->
<link href="<?php echo layTuyChon("urlChinh"); ?>css/bootstrap.min.16.css" rel="stylesheet">
<!-- google font -->
<link rel="stylesheet" type="text/css" href="<?php echo layTuyChon("urlChinh"); ?>css/font-opensans.css">
<!-- ionicons font -->
<link href="<?php echo layTuyChon("urlChinh"); ?>css/ionicons.min.css" rel="stylesheet">
<!-- animation styles -->
<link rel="stylesheet" href="<?php echo layTuyChon("urlChinh"); ?>css/animate.css" />
<!-- custom styles -->
<link href="<?php echo layTuyChon("urlChinh"); ?>css/custom-red.css" rel="stylesheet" id="style">
<!-- owl carousel styles-->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.transitions.css">
<!-- magnific popup styles -->
<link rel="stylesheet" href="css/magnific-popup.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<!-- wrapper start -->
<div class="wrapper"> 
  <!-- sticky header start -->
  <div class="sticky-header"> 
    <!-- header start -->
    <div class="container header">
      <div class="row">
        <div class="col-sm-5 col-md-5 wow fadeInUpLeft animated"><a class="navbar-brand" href="index.html">globalnews</a></div>
        <div class="col-sm-11 col-md-11 hidden-xs text-right"><img src="images/ads/468-60-ad.gif" width="468" height="60" alt=""/></div>
      </div>
    </div>
    <!-- header end --> 
    <!-- nav and search start -->
    <div class="nav-search-outer"> 
      <!-- nav start -->
      
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
          <div class="row">
            <div class="col-sm-16"> <a href="javascript:;" class="toggle-search pull-right"><span class="ion-ios7-search"></span></a>
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav text-uppercase main-nav ">
                    <?php echo hienThiTopMenu(); ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- nav end --> 
        <!-- search start -->
        
        <div class="search-container ">
          <div class="container">
            <form action="" method="" role="search">
              <input id="search-bar" placeholder="Type & Hit Enter.." autocomplete="off">
            </form>
          </div>
        </div>
        <!-- search end --> 
      </nav>
      <!--nav end--> 
    </div>
    <!-- nav and search end--> 
  </div>
  <!-- sticky header end --> 
  
  <!-- data start -->
  
  <div class="container ">
    <div class="row "> 
      <!-- left sec start -->
      <div class="col-md-11 col-sm-11">
<?php include("./tp/".$cauHinhChucNang[$_GET["chucnang"]]["tpFile"]); ?>
      </div>
      <!-- left sec end --> 
      <!-- right sec start -->
      <div class="col-sm-5 hidden-xs right-sec">
        <div class="bordered">
          <div class="row ">
            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="50"> <img class="img-responsive" src="images/ads/336-280-ad.gif" width="336" height="280" alt=""/> <a href="#" class="sponsored">sponsored advert</a> </div>
            <div class="col-sm-16 bt-spac wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="150">
              <div class="table-responsive">
                <table class="table table-bordered social">
                  <tbody>
                    <tr>
                      <td><a class="rss" href="#">
                        <p> <span class="ion-social-rss"></span> subscribe<br>
                          to rss</p>
                        </a></td>
                      <td><a class="twitter" href="#">
                        <p><span class="ion-social-twitter"></span> 811,6
                          followers</p>
                        </a></td>
                      <td><a class="facebook" href="#">
                        <p> <span class="ion-social-facebook"></span> 6958,56<br>
                          fans</p>
                        </a></td>
                    </tr>
                    <tr>
                      <td><a class="youtube" href="#">
                        <p> <span class="ion-social-youtube"></span> 6954,55
                          subscribers</p>
                        </a></td>
                      <td><a class="vimeo" href="#">
                        <p><span class="ion-social-vimeo"></span> 896,7
                          subscribers</p>
                        </a></td>
                      <td><a class="dribbble" href="#">
                        <p> <span class="ion-social-dribbble-outline"></span> 6321,56
                          followers</p>
                        </a></td>
                    </tr>
                    <tr>
                      <td><a class="googleplus" href="#">
                        <p> <span class="ion-social-googleplus"></span> 9625.56
                          followers</p>
                        </a></td>
                      <td><a class="pinterest" href="#">
                        <p><span class="ion-social-pinterest"></span> 741,9
                          followers</p>
                        </a></td>
                      <td><a class="instagram" href="#">
                        <p> <span class="ion-social-instagram"></span> 3548,7
                          followers</p>
                        </a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- activities start -->
            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="130"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs nav-justified " role="tablist">
                <li class="active"><a href="#popular" role="tab" data-toggle="tab">popular</a></li>
                <li><a href="#recent" role="tab" data-toggle="tab">recent</a></li>
                <li><a href="#comments" role="tab" data-toggle="tab">comments</a></li>
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="popular">
                  <ul class="list-unstyled">
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5 col-md-4"><img class="img-thumbnail pull-left" src="images/popular/pop-1.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11 col-md-12">
                          <h4>Tellus. Phasellus viverra nulla ut metus</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-2.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11 col-md-12">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-3.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11 col-md-12">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-4.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11 col-md-12">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-5.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11 col-md-12">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                  </ul>
                </div>
                <div class="tab-pane" id="recent">
                  <ul class="list-unstyled">
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-5.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-4.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-3.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-2.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/popular/pop-1.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                  </ul>
                </div>
                <div class="tab-pane" id="comments">
                  <ul class="list-unstyled">
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/comments/com-1.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>Tellus Phasellus viverra nulla</h4>
                          <p>Cum sociis natoque penatibus et magnis dis parturient montes..</p>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/comments/com-2.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo..</p>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/comments/com-3.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <p>Donec pede justo, fringilla vel, aliquet nec vulputate..</p>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/comments/com-4.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-12">
                          <h4>The evolution of the apple ..</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="images/comments/com-5.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <p>Beatae vitae dicta sunt.explicabo ipsam..</p>
                        </div>
                      </div>
                      </a> </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- activities end --> 
            
            <!-- calendar start -->
            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="50">
              <div class="single pull-left"></div>
            </div>
            <!-- calendar end --> 
          </div>
        </div>
      </div>
      <!-- right sec end --> 
    </div>
  </div>
  <!-- data end --> 
  
  <!-- Footer start -->
  <footer>
    <div class="btm-sec" style="text-align:center">
      <div class="container">
        <div class="row">
          <div class="col-sm-16">
            <div class="row">
              <div data-wow-delay="0.5s" data-wow-offset="10">© 2014 GLOBALNEWS THEME - ALL RIGHTS RESERVED</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer end -->
</div>
<!-- wrapper end --> 

<!-- jQuery --> 
<script src="js/jquery.min.js"></script> 
<!--jQuery easing--> 
<script src="js/jquery.easing.1.3.js"></script>
<!--jQuery timeago--> 
<script src="js/jquery.timeago.js"></script> 
<!-- bootstrab js --> 
<script src="js/bootstrap.min.js"></script> 
<!--wow animation--> 
<script src="js/wow.min.js"></script> 
<!-- calendar--> 
<script src="js/jquery.pickmeup.js"></script> 
<!-- go to top --> 
<script src="js/jquery.scrollUp.js"></script> 
<!-- scroll bar --> 
<script src="js/jquery.nicescroll.js"></script> 
<script src="js/jquery.nicescroll.plus.js"></script> 
<!--media queries to js--> 
<script src="js/enquire.js"></script> 
<!--custom functions--> 
<script src="js/custom-fun.js"></script>
</body>
</html>