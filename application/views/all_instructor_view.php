<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit User</title>
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
        <center><h1>Edit User</h1></center>
        </div>
      </div>
      


<div class="btn-toolbar">
    <button class="btn btn-primary">New User</button>
    <button class="btn">Import</button>
    <button class="btn">Export</button>
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>Number</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Department</th>
          <th style="width: 36px;"></th>
        </tr>
      </thead>
      <tbody>
        {allins}
        <tr>
          <td>{inumber}</td>
          <td>{name}</td>
          <td>{surname}</td>
          <td>{department}</td>
          <td>
              <a href="editForm/{id}"><i class="icon-pencil"></i></a>
              <!-- <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a> -->
              <a href="deleteInstructor/{id}"><i class="icon-remove"></i></a>
          </td>
        </tr>
         {/allins}
      </tbody>
    </tabqle>
</div>
<div class="pagination">
    <ul>
        <li><a href="#">Prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Next</a></li>
    </ul>
</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>



    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="{base}assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="{base}assets/js/bootstrap-typeahead.min.js" type="text/javascript"></script>
    <script src="{base}assets/js/bootstrap-combobox.js" type="text/javascript"></script>
</body>
</html>