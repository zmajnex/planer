<?php 
include 'inc/header.php';
?>
 <div class="container">
            <div class="row">
                <div class="col-sm-6">

                  <form action="insert.php" method="POST">

                    <div class="form-group">
                        <label>Please pick date and time</label>
                        <div class="input-group date"  id="datetimepicker1" data-target-input="nearest">
                            <input type="text" name="date"  class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class=" text-primary far fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">  
                          <label >Your name</label>
                          <input type="text" name="name"  class="form-control " placeholder="name"/>
                          </div>
                          <div class="form-group">  
                              <label >Your email</label>
                              <input type="text" name="email"  class="form-control " placeholder="email"/>
                              </div>
                              <div class="form-group">  
                                  <label >Your phone Number</label>
                                  <input type="text" name="phone"  class="form-control " placeholder="phone"/>
                                  </div>
                                  <div class="form-group"> 
                                    <select class="custom-select mr-sm-2" name="job">
                                      <option selected>Choose type of servis</option>
                                      <option value="Check">Check</option>
                                      <option value="Repair">Repair</option>
                                      <option value="Change">Change</option>
                                     </select>
                                   </div>

                              <button type="submit" class="btn btn-primary mb-2">Make appointment</button>
                          </div>
                      </div> 
                  </div>
                </form>
                </div>

            </div>
        </div>
        <script type="text/javascript">
          $(function () {
              $('#datetimepicker1').datetimepicker();
          });
      </script>
   
   <?php 
include 'inc/footer.php';
?>
