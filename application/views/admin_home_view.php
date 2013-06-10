<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Android Alert System</title>
<link href="{base}assets/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
<link href="{base}assets/css/datepicker.css" media="screen" rel="stylesheet" type="text/css">
<!--<link href="{base}assets/css/bootstrap-combobox.css" rel="stylesheet" type="text/css">-->
<!--<link rel="stylesheet" type="text/css" href="{base}assets/css/checkbox_style.css" />-->
</head>

  
<body>

  <div class="navbar navbar-inverse nav">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="">Android Alert System</a>
      
            <div class="nav-collapse collapse">
              <ul class="nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Alerts <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="alert/addform"><i class="icon-envelope"></i> Compose New Alert</a></li>
                            
                            
                        </ul>
                    </li>
              </ul>
                            <ul class="nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="student/addForm"><i class="icon-plus"></i> Add Student</a></li>
                            <li><a href="instructor/addForm"><i class="icon-plus"></i> Add Instructor</a></li>
                            <li><a href="student/allStudents"><i class="icon-edit"></i> Edit Student</a></li>
                            <li><a href="instructor/allInstructors"><i class="icon-edit"></i> Edit Instructor</a></li>

                        </ul>
                    </li>
              </ul>
              <div class="pull-right">
                <ul class="nav pull-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, Admin <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/user/preferences"><i class="icon-cog"></i> Preferences</a></li>
                            <li><a href="/help/support"><i class="icon-envelope"></i> Contact Support</a></li>
                            <li class="divider"></li>
                            <li><a href="/auth/logout"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
              </div>
            </div>
        </div>
    </div>
</div>

 <!-- Main Area -->
                <div id="main_area" >
                        <!-- Slider -->
                        <div class="row">
                                <div class="span12" id="slider">
                                        <!-- Top part of the slider -->
                                        <div class="row">
                                                <div class="span8" id="carousel-bounding-box">
                                                        <div id="myCarousel" class="carousel slide">
                                                                <!-- Carousel items -->
                                                                <div class="carousel-inner">
                                                                        <div class="active item" data-slide-number="0"><img src="http://placehold.it/770x300&text=one" width"900" /></div>
                                                                        <div class="item" data-slide-number="1"><img src="http://placehold.it/770x300&text=two" width"900"/></div>
                                                                        <div class="item" data-slide-number="2"><img src="http://placehold.it/770x300&text=three" width"900" /></div>
                                                                        <div class="item" data-slide-number="3"><img src="http://placehold.it/770x300&text=four" width"900" /></div>
                                                                        <div class="item" data-slide-number="4"><img src="http://placehold.it/770x300&text=five" width"900" /></div>
                                                                        <div class="item" data-slide-number="5"><img src="http://placehold.it/770x300&text=six" width"900" /></div>
                                                                </div>
                                                                <!-- Carousel nav -->
                                                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
                                                                <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                                                        </div>
                                                </div>
                                                <div class="span4" id="carousel-text"></div>
 
                                                <div style="display: none;" id="slide-content">
                                                        <div id="slide-content-0">
                                                                <h2>Slider One</h2>
                                                                <p>Lorem Ipsum Dolor</p>
                                                                <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                                        </div>
                                                        <div id="slide-content-1">
                                                                <h2>Slider Two</h2>
                                                                <p>Lorem Ipsum Dolor</p>
                                                                <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                                        </div>
                                                        <div id="slide-content-2">
                                                                <h2>Slider Three</h2>
                                                                <p>Lorem Ipsum Dolor</p>
                                                                <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                                        </div>
                                                        <div id="slide-content-3">
                                                                <h2>Slider Four</h2>
                                                                <p>Lorem Ipsum Dolor</p>
                                                                <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                                        </div>
                                                        <div id="slide-content-4">
                                                                <h2>Slider Five</h2>
                                                                <p>Lorem Ipsum Dolor</p>
                                                                <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                                        </div>
                                                        <div id="slide-content-5">
                                                                <h2>Slider Six</h2>
                                                                <p>Lorem Ipsum Dolor</p>
                                                                <p class="sub-text">October 24 2012 - <a href="#">Read more</a></p>
                                                        </div>
                                                </div>
                                        </div>
 
                                </div>
                        </div> <!--/Slider-->
 

</div>
<script>
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
 
 
});
</script>
<!--

    <div class="container">
      <div class="row">
        <div class="well">
        <center><h1>Admin Home Page</h1></center>
        </div>
      </div>
      




 
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div style="float:left; margin-left:250px; margin-right:50px;">
    <a href="alert" class="btn btn-primary">
        <i class="icon-pencil icon-white"></i>
        <span><strong>Compose New Alert</strong></span>            
    </a>
</div>





            <div class="btn-group">
              <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i>User</a>
              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="user_addition"><i class="icon-plus"></i> Add New User</a></li>
                <li><a href="edit"><i class="icon-edit"></i> Edit User</a></li>
                
              </ul>
            </div>
          </div>
 -->





</div>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="{base}assets/js/bootstrap.js" type="text/javascript"></script>
    <!--<script src="{base}assets/js/bootstrap-typeahead.min.js" type="text/javascript"></script>-->
    <!--<script src="{base}assets/js/bootstrap-combobox.js" type="text/javascript"></script>-->
    <script src="{base}assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<script type="text/javascript">
$('.dropdown-toggle').dropdown()

</script>

</body>
</html>