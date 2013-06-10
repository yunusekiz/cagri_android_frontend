 <br />
<br />
<!-- <div class="container" style="width:35%">
  <label class="control-label" for="field1"><h2>Kayıtlı Tüm Konular ve Sorular</h2></label>
</div> -->
<div class="container" style="width:70%">
<form method="POST" action="{base}backend/alert/addNewAlert">
<!-- <table class="table table-condensed table-hover">
  <thead>
    <tr>
      <th class="span2"><h4>Soru Seçin</h4></th>
      <th class="span2"><h4>Konular</h4> </th>
      <th class="span1"></th>
      <th class="span9"><h4>Soru Detayları</h4></th>
    </tr>
  </thead>
  <tbody>
    {subject_and_question}
    <tr>
      <td><input type="checkbox" name="exam_questions[]" value="{question_id}"></td>
      <td><span class="label pull-left">{subject_name}</span></td>
       <td></td>
      <td>{question_detail}</td>
    </tr>
    {/subject_and_question}
  </tbody>
</table> -->
<!-- <input type="submit" value="Seçili Soruları Kullanarak Yeni Sınav Oluştur" class="btn btn-block btn-success">  -->



<center><a href="#advanced" role="button" data-toggle="modal" class="btn btn-large btn-success">Create New Alert</a></center>
 
<!-- Advanced Modal -->
<div id="advanced" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="advancedSort" aria-hidden="true">
  <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <ul class="nav nav-pills pull-right">
        <li class="active">
          <a href="#date" data-toggle="pill"><i class="icon-bell icon-black"></i> Alert</a>
        </li>
        <li><a href="#relevance" data-toggle="pill"><i class="icon-calendar icon-black"></i> Date</a></li>
      </ul>
      <h4>Alert Detail</h4>
  </div>
  <div class="modal-body">
      <div class="row-fluid">
      <div class="tab-content">
        <div class="tab-pane active" id="date">
             
     <label class="control-label"><b>Faculty</b></label>
        <div class="controls" >
     <select class="combobox" name="alert_faculty">
       <option>Choose One</option>
       <option value="Faculty Of Engineering">Faculty Of Engineering</option>
       <option value="Faculty Of Science">Faculty Of Science</option>
     </select>
       </div>



        <label class="control-label"><b>Department</b></label>
        <div class="controls">
     <select class="combobox" name="alert_department">
       <option>Choose One</option>
       <option value="Department Of Software Engineering">Department Of Software Engineering</option>
       <option value="Department Of Mechanical Engineering">Department Of Mechanical Engineering</option>
       <option value="Department Of Mathematics">Department Of Mathematics</option>
     </select>
       </div>


         <label class="control-label"><b>Class</b></label>
        <div class="controls">
     <select class="combobox" name="alert_clas">
       <option >Choose One</option>
       <option value="Prep School">Prep School</option>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       
     </select>
       </div>

         <label class="control-label"><b>Alert Type</b></label>
        <div class="controls">
     <select class="combobox" name="alert_type">
       <option >Choose One</option>
       <option value="Urgent">Urgent</option>
       <option value="Normal">Normal</option>
       <option value="Standart">Standart</option>
       
       
     </select>
       </div>
             
        <div class="controls controls-row">
               <label><b>Message</b></label>
                 <textarea name="alert_body" id="message" class="input-xlarge span15" rows="3"></textarea>
            </div>
     



       <div id="bilgi_div"></div>
            
          </div>
          <div class="tab-pane" id="relevance">
              <div class="controls controls-row">
                  <div><b>Alert Date : </b><input type="text" name="alert_date" id="datepicker" value="{default_event_date}"></div>
              </div>
          </div>
          <br />
          <input type="submit" value="Save and Create Event" class="btn btn-block btn-primary">
        </div>
      </div>
  </div>
</div>

</form>
</div>
