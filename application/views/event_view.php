<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="{base}assets/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
<link href="{base}assets/css/bootstrap-combobox.css" media="screen" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{base}assets/css/checkbox_style.css" />
</head>
    <style type="text/css">
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
    </style>

<body>
  <div class="navbar navbar-inverse nav">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Android Alert System</a>
      
            <div class="nav-collapse collapse">
              <ul class="nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Alerts <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/user/preferences"><i class="icon-envelope"></i> Compose New Alert</a></li>
                            
                            
                        </ul>
                    </li>
              </ul>
                            <ul class="nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="student"><i class="icon-plus"></i> Add Student</a></li>
                            <li><a href="instructor/addForm"><i class="icon-plus"></i> Add Instructor</a></li>
                            <li><a href="/help/support"><i class="icon-edit"></i> Edit Student</a></li>
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


    <div class="container">
      <div class="row">
        <div class="well">
        <center><h1>Add New Event Page</h1></center>
        </div>
      </div>
      <div class="row">
        <form class="form-signin" action="#">
          <fieldset>


<!--  <div class="control-group check_boxes optional">
  	<label class="check_boxes optional control-label">Select Class</label>
  	<div class="controls">
 	<label class="checkbox inline"><input class="check_boxes optional"
  		id="article_content_type_blog" name="article[content_type][1]"
        type="checkbox" value="1" />1
 	</label>	
 	<label class="checkbox inline"><input class="check_boxes optional"
 		id="article_content_type_editorial" name="article[content_type][2]" 
 		type="checkbox" value="2" />2
	</label>
	 <label class="checkbox inline"><input class="check_boxes optional" 
 		id="article_content_type_announce" name="article[content_type][3]"
        type="checkbox" value="3" />3
	</label>
	<label class="checkbox inline"><input class="check_boxes optional"
 		id="article_content_type_advertisement" name="article[content_type][4]"
     	type="checkbox" value="4" />4</label>-->
   <!-- <input name="article[content_type][]" type="hidden" value="" />-->
 <!--	</div>
 </div>-->
<div class="div_checkbox_label_main"><label class="control-label">Event For</label></div>
<div id="holder">

	<div>
    
    	<div class="div_checkbox_and_label_main">
        	<div class="div_check_box">
            	<input type="checkbox" id="checkbox-1-1" class="regular-checkbox" name="article[content_type][]" value="1"/>
        		<label for="checkbox-1-1"></label>
            </div>
        	<div class="div_checkbox_label_text">
            	1.Classes
            </div>
		</div>
        
    	<div class="div_checkbox_and_label_main">
        	<div class="div_check_box">
            	<input type="checkbox" id="checkbox-1-2" class="regular-checkbox" name="article[content_type][]" value="2"/>
        		<label for="checkbox-1-2"></label>
            </div>
        	<div class="div_checkbox_label_text">
            	2.Classes
            </div>
		</div>        

    	<div class="div_checkbox_and_label_main">
        	<div class="div_check_box">
            	<input type="checkbox" id="checkbox-1-3" class="regular-checkbox" name="article[content_type][]" value="3"/>
        		<label for="checkbox-1-3"></label>
            </div>
        	<div class="div_checkbox_label_text">
            	3.Classes
            </div>
		</div>

    	<div class="div_checkbox_and_label_main">
        	<div class="div_check_box">
            	<input type="checkbox" id="checkbox-1-4" class="regular-checkbox" name="article[content_type][]" value="4"/>
        		<label for="checkbox-1-4"></label>
            </div>
        	<div class="div_checkbox_label_text">
            	4.Classes
            </div>
		</div> 
     
        
	</div>
</div>

            <div class="control-group">
              <label class="control-label">Event Type</label>
              <div class="controls">
                <select class="combobox">
                  <option></option>
                  <option value="PA">Sex Party</option>
                  <option value="CT">Drug Party</option>
                  <option value="NY">Alcohol Party</option>
                  <option value="MD">Cumhuriyet Halk Party</option>
                </select>
              </div>
              


    	 <div class="control-group"> 
         	 <div class="controls">  
          		<label class="control-label" for="textarea">Event Subject</label>
          		<input type="text" class="input-xlarge" id="input01" placeholder="Write here, subject .....">
        	 </div>  
    	</div>
        
      <div class="control-group">  
            <label class="control-label" for="textarea">Event Body</label>  
          <div class="controls">  
            <textarea class="input-xlarge" id="textarea" rows="7" placeholder="Write here, event detail ....."></textarea>
          </div>  
     </div>
     
     
     <label class="control-label">Alert Type</label>
        <div class="controls">
     <select class="combobox">
       <option></option>
       <option value="PA">Urgent</option>
       <option value="CT">Very Urgent</option>
       <option value="NY">Very Very Urgent</option>
       <option value="MD">No Urgent</option>
       <option value="VA">So Fuckin Urgent</option>
     </select>
       </div>              
   </div>  
          
     <button type="submit" class="btn btn-primary" data-loading-text="Loading...">Save Event</button>  
	</fieldset>
        </form>
      </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="{base}assets/js/bootstrap-typeahead.min.js" type="text/javascript"></script>
    <script src="{base}assets/js/bootstrap-combobox.js" type="text/javascript"></script>
    <script type="text/javascript">
      //<![CDATA[
        $(document).ready(function(){
          $('.combobox').combobox()
        });
      //]]>
    </script>
 <script type="text/javascript">
$('#toggle-all').click(function() {
    $('.btn-group input[type="checkbox"]').prop('checked', true);
});​
</script>
<br />
<br />
<br />
<br />
<br />


</body>
</html>