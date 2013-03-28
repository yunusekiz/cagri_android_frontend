<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>

<link rel="stylesheet" type="text/css" href="{base}assets/login_assets/login_css/reset.css" />
<link rel="stylesheet" type="text/css" href="{base}assets/login_assets/login_css/structure.css" />
<link rel="stylesheet" type="text/css" href="{base}assets/login_assets/notification_css/jquery_notification.css" />

<script type="text/javascript" src="{base}assets/login_assets/notification_js/jquery_v_1.4.js"></script>
<script type="text/javascript" src="{base}assets/login_assets/notification_js/jquery_notification_v.1.js"></script>

<script type="text/javascript">
      $(document).ready(function(){
        });


</script>



    <link href="{base}assets/login_assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
	  #id{ margin-left:50px;}

    </style>



</head>

<body>




  <div class="container">

      <form class="form-signin" action="{base}action" method="post"> 
        <h1 class="form-signin-heading"  id="id">Login Page</h2>
        <input type="text" class="input-block-level" placeholder="Email address" required="required" name="email">
        <input type="password" class="input-block-level" placeholder="Password" required="required" name="pass">
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        <a href="">Forgot Password?</a>
      </form>

    </div> <!-- /container -->
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>











</body>
</html>