                      <?php 
                    if(!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
}

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
 
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">
                <div class="row">
      <div class="col-lg-12">
            <h3 class="">Post New Announcement</h3>
          </div>
          <!-- /.col-lg-12 -->
       </div>   
                <div class="row">
                    <div class="col-md-11"> 
                    <div class="form-group">
                     <label class="bmd-label-floating">Title:</label> 
                            <input class="form-control " id="ANNOUNCEMENT_TEXT" name="ANNOUNCEMENT_TEXT" type="text" value="">
                        </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-11">
                    <div class="form-group">
                        <label class="bmd-label-floating">Body:</label> 
                            <textarea  class="form-control " id="ANNOUNCEMENT_WHAT" name="ANNOUNCEMENT_WHAT"></textarea>
                          </div>
                      </div>
                  </div>     

                   <div class="row">
                    <div class="col-md-11">
                      <div class="form-group">
                      <label class="bmd-label-floating">When (mm/dd/yyyy hh:mm):</label> 
                          <div class='input-group date' >
                            <input type='text' id='datetimepicker2' name="ANNOUNCEMENT_WHEN" class="form-control input-group date TRANSDATE"   />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                    </div>
                  </div>


               <div class="row">
                <div class="col-md-11">
                 <div class="form-group">
                      <label class="bmd-label-floating">Where (Location) :</label> 
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control " id="ANNOUNCEMENT_WHERE" name="ANNOUNCEMENT_WHERE"  type="text" value="">
                      </div>
                    </div>
                  </div>

              

            
             <div class="row">
                    <div class="col-md-11"> 
                       <button class="btn btn-primary btn-round" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button>  
                       </div>
                    </div>  
          
        </form>
       