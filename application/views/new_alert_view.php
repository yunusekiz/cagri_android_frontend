<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Alert</title>
<link href="{base}assets/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
<link href="{base}assets/css/bootstrap-combobox.css" media="screen" rel="stylesheet" type="text/css">
<link href="{base}assets/css/datepicker.css" rel="stylesheet" type="text/css">

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
        <center><h1>Compose New Alert</h1></center>
        </div>
      </div>

      <form class="well span8">
  <div class="row">
    <div class="span3">
      
      <label>Faculty
      <select id="subject" name="subject" class="span3">
        <option value="na" selected="">Choose One:</option>
        <option value="service">General Customer Service</option>
        <option value="suggestions">Suggestions</option>
        <option value="product">Product Support</option>
      </select>
      </label>
      <label>Department
      <select id="subject" name="subject" class="span3">
        <option value="na" selected="">Choose One:</option>
        <option value="service">General Customer Service</option>
        <option value="suggestions">Suggestions</option>
        <option value="product">Product Support</option>
      </select>
      </label>
      <label>Subject
      <select id="subject" name="subject" class="span3">
        <option value="na" selected="">Choose One:</option>
        <option value="service">General Customer Service</option>
        <option value="suggestions">Suggestions</option>
        <option value="product">Product Support</option>
      </select>
      </label>
      <label>Class
      <select id="subject" name="subject" class="span3">
        <option value="na" selected="">Choose One:</option>
        <option value="service">General Customer Service</option>
        <option value="suggestions">Suggestions</option>
        <option value="product">Product Support</option>
      </select>
      </label>
    </div>
    <div class="span5">
      <label>Message</label>
      <textarea name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
    </div>
  
    <button type="submit" class="btn btn-primary pull-right">Send</button>
  </div>
</form>

      

     </select>
       </div>
       <div id="bilgi_div"></div>  
   </div>


      
        </form>
      </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="{base}assets/js/bootstrap-typeahead.min.js" type="text/javascript"></script>
    <script src="{base}assets/js/bootstrap-combobox.js" type="text/javascript"></script>
        <script src="{base}assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <script type="text/javascript">
      //<![CDATA[
        $(document).ready(function(){
          $('.combobox').combobox()
        });
      //]]>
    </script>
    <script type="text/javascript">
        $(function(){
      window.prettyPrint && prettyPrint();
      $('#dp1').datepicker({
        format: 'mm-dd-yyyy'
      });
      $('#dp2').datepicker();
      $('#dp3').datepicker();
      $('#dp3').datepicker();
      $('#dpYears').datepicker();
      $('#dpMonths').datepicker();
      
      
      var startDate = new Date(2012,1,20);
      var endDate = new Date(2012,1,25);
      $('#dp4').datepicker()
        .on('changeDate', function(ev){
          if (ev.date.valueOf() > endDate.valueOf()){
            $('#alert').show().find('strong').text('The start date can not be greater then the end date');
          } else {
            $('#alert').hide();
            startDate = new Date(ev.date);
            $('#startDate').text($('#dp4').data('date'));
          }
          $('#dp4').datepicker('hide');
        });
      $('#dp5').datepicker()
        .on('changeDate', function(ev){
          if (ev.date.valueOf() < startDate.valueOf()){
            $('#alert').show().find('strong').text('The end date can not be less then the start date');
          } else {
            $('#alert').hide();
            endDate = new Date(ev.date);
            $('#endDate').text($('#dp5').data('date'));
          }
          $('#dp5').datepicker('hide');
        });

        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
    });
          
    </script>
 <script type="text/javascript">
$('#toggle-all').click(function() {
    $('.btn-group input[type="checkbox"]').prop('checked', true);
});​
</script>


<script type="text/javascript">
  $('#btn').click(
                    function()
                    {
                      $.ajax(
                              {
                                type:"POST",
                                async: false,
                                url:"instructor/add_instructor",
                                data:$('#form').serialize(),
                                success:function(msg)
                                {
                                  $('#bilgi_div').css("color","blue").html(msg).delay(2000).fadeOut("fast");
                                }
                              }
                            );
                    }
                 );
</script>



<br />
<br />
<br />
<br />
<br />


</body>
</html>