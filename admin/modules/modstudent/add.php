 <div class="container">
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">

     <div class="row">
         <div class="col-lg-12">
            <h3 >New Student</h3>
          </div>
          <!-- /.col-lg-12 -->
       </div>

                
                <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">First Name:</label> 
                         <input class="form-control input-sm" id="FNAME" name="FNAME"   type="text" value="" required>
                      </div>
                    </div>
                  </div>

                   <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Middle Name:</label> 
                         <input class="form-control input-sm" id="MNAME" name="MNAME" type="text" value="" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Last Name:</label> 
                         <input class="form-control input-sm" id="LNAME" name="LNAME"  type="text" value=""  required>
                      </div>
                    </div>
                  </div>


                   <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Course:</label> 
                            <select class="form-control input-sm" name="COURSE" id="COURSE">

                              <?php  
                              $mydb->setQuery("SELECT * 
                                      FROM  `tblcourse`");
                              $cur = $mydb->loadResultList();

                            foreach ($cur as $result) { ?>

                              <option value="<?php echo $result->COURSEID; ?>"><?php echo $result->DESCRIPTION; ?></option>
                                   <?php } ?>
                              </select>
         
                      </div>
                    </div>
                  </div>


                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Department:</label> 
                         <select class="form-control input-sm" name="DEPARTMENT" id="DEPARTMENT">
                             <?php  
                              $mydb->setQuery("SELECT * 
                                      FROM  `tbldepartment`");
                              $cur = $mydb->loadResultList();

                            foreach ($cur as $result) { ?>

                              <option value="<?php echo $result->DEPARTMENTID; ?>"><?php echo $result->DESCRIPTION; ?></option>
                            <?php } ?> 
                        </select>
                      </div>
                    </div>
                  </div>
 
                  <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Address:</label> 
                         <input class="form-control input-sm" id="ADDRESS" name="ADDRESS"  type="text" value=""  required>
                      </div>
                    </div>
                  </div> 
                 
                   <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Contact No.:</label> 
                         <input class="form-control input-sm" id="PHONE" name="PHONE"  type="text" value="" required maxlength="11">
                      </div>
                    </div>
                  </div> 
                  
                   <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Username:</label> 
                         <input class="form-control input-sm" id="USERNAME" name="USERNAME" type="text" value="">
                      </div>
                    </div>
                  </div>

                   <div class="row">
                   <div class="col-md-11">
                    <div class="form-group">
                     <label class="bmd-label-floating">Password:</label> 
                         <input class="form-control input-sm" id="PASS" name="PASS"   type="password" value="">
                      </div>
                    </div>
                  </div>
  
                 <div class="row">
                    <div class="col-md-9"> 
                        <button type="submit" name="studsave" class="btn btn-primary btn-round">Register</button>
                           
                     </div>
                    </div> 
        </form>
      </div>
      <br/>
      <br/>
       