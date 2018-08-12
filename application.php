
<?php include ('header.php'); ?>

<body>

        <div class="container" style="width: 30%">
                <table class="table table-striped">
                   <tbody>
                      <tr>
                         <td colspan="1">
                            <form class="well form-horizontal">
                               <fieldset>
                                  <div class="form-group">
                                     <label class="col-md-4 control-label">Full Name</label>
                                     <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="col-md-4 control-label">Address Line 1</label>
                                     <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine1" name="addressLine1" placeholder="Address Line 1" class="form-control" required="true" value="" type="text"></div>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="col-md-4 control-label">Address Line 2</label>
                                     <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="addressLine2" name="addressLine2" placeholder="Address Line 2" class="form-control" required="true" value="" type="text"></div>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="col-md-4 control-label">City</label>
                                     <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" class="form-control" required="true" value="" type="text"></div>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="col-md-4 control-label">County</label>
                                     <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="county" name="county" placeholder="County" class="form-control" required="true" value="" type="text"></div>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="col-md-4 control-label">EirCode (Optional)</label>
                                     <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="eircode" name="eircode" placeholder="EirCode" class="form-control" value="" type="text"></div>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="col-md-4 control-label">Country</label>
                                     <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group">
                                           <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                           <select class="selectpicker form-control">
                                              <option>Ireland</option>
                                              <option>Other</option>
                                           </select>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="col-md-4 control-label">Email</label>
                                     <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required="true" value="" type="text"></div>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="col-md-4 control-label">Phone Number</label>
                                     <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text"></div>
                                     </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                               </fieldset>
                            </form>
                         </td>  
                      </tr>
                   </tbody>
                </table>
             </div>
</body>

<?php include ('footer.php'); ?>


