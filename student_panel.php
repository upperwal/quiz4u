<h4 class="theme-colour">Student Panel</h4>
                    <button data-target="#modalStudentAdd" class="btn btn-primary btn-mini btn-width add-btn-tooltip" data-toggle="modal" title="Add Student">Add</button>
                  
                    <button data-target="#modalStudentEdit" class="btn btn-primary btn-mini btn-width add-btn-tooltip" data-toggle="modal" title="Edit Student Details">Edit</button>
                    <button class="btn btn-primary btn-mini btn-width add-btn-tooltip" data-toggle="tooltip" title="Approve Student">Approve</button>
                    <button class="btn btn-primary btn-mini btn-width add-btn-tooltip" data-toggle="tooltip" title="Disapprove Student">Disapprove</button>
                    <button data-target="#modalStudentDelete" class="btn btn-danger btn-mini btn-width add-btn-tooltip" data-toggle="modal" title="Delete Student">Delete</button>

                    <hr>
                   
 
                    
                      <div id="modalStudentAdd" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h3 id="myModalLabel">Add Student</h3>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-info">
                                All fields are Required.
                          </div>
                          <!--Form to add Student BEGINS-->
                          <form name="booking" action="" method="post" onsubmit="return validateForm()" id="margin-top-15">
                            <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Student Name:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputName" id="inputName" placeholder="Student Name">
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Roll No:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="Roll No given by the Institution">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your organization.
                              </div>
                            </div>
                          </div>


                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Branch:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="Branch">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your organization.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Semester:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="Semester">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your organization.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Email:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="Email">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your position.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Phone:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="Phone">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your position.
                              </div>
                            </div>
                          </div>

                          

                        </form>
                          <!--Form to add Student ENDS-->
                        </div>
                        <div class="modal-footer">
                          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                          <button class="btn btn-primary">Save changes</button>
                        </div>
                    </div>


                    <!--Edit Faculty Modal BEGINS-->
                    <div id="modalStudentEdit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h3 id="myModalLabel">Edit Student Details</h3>
                        </div>
                        <div class="modal-body">
                          <!--Form to add Faculty BEGINS-->
                          <form name="booking" action="" method="post" onsubmit="return validateForm()" id="margin-top-15">
                            <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Student Name:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputName" id="inputName" placeholder="Student Name" value="Abhishek Upperwal">
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Roll No:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="UID given by the Institution" value="CSEITM142">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your organization.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Branch:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="Branch" value="CSE/IT">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your organization.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Semester:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="Semester" value="Fifth">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your organization.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Email:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="Email" value="mail@example.com">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your position.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Phone:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="Phone" value="1234567890">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your position.
                              </div>
                            </div>
                          </div>

                          

                        </form>
                          <!--Form to add Student ENDS-->
                        </div>
                        <div class="modal-footer">
                          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                          <button class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    <!--Edit Student Modal END-->



                    <div id="modalStudentDetails" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h3 id="myModalLabel">Student Details</h3>
                        </div>
                        <div class="modal-body">
                          
                            <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Student Name:</label>
                            </div>
                            <div class="span6">
                              Abhishek Upperwal
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Roll No:</label>
                            </div>
                            <div class="span6">
                              CSEITM154
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Branch:</label>
                            </div>
                            <div class="span6">
                              CSE/IT
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Semester:</label>
                            </div>
                            <div class="span6">
                              CSE/IT
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">eMail:</label>
                            </div>
                            <div class="span6">
                              email@example.com
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Phone:</label>
                            </div>
                            <div class="span6">
                              1234567890
                            </div>
                          </div>

                          

                       
                          
                        </div>
                        <div class="modal-footer">
                          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                        </div>
                    </div>

                    <!--Modal Delete BEGINS-->
                    <div class="alert alert-block alert-error fade in modal hide" id="modalStudentDelete" aria-labelledby="myModalLabel" aria-hidden="true" >
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="alert-heading">Are you sure!</h4>
            <p>Your record will be destroyed permanantly if you press Yes. Are you sure you want to do that.</p>
            <p>
              <a class="btn btn-danger" href="#">Yes! Delete this Record.</a> <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </p>
            </div>
                    <!--Modal Delete ENDS-->


                    <table>
                      <tbody>
                        <tr>
                          <th><input type="checkbox" class="select-all"></th>
                          <th>SNo.</th>
                          <th>Roll No</th>
                          <th>Name</th>
                          <th>Branch&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                          <th>Status</th>
                          <th>Alter/Delete</th>
                        </tr>
                        <tr>
                          <td><input type="checkbox"/></td>
                          <td>1</td>
                          <td>CSEITM167</td>
                          <td>Abhishek Upperwal</td>
                          <td>CSE/IT</td>
                          <td><span class="label label-success">Approved</span></td>
                          <td>
                            <i data-target="#modalStudentDetails" class="icon-user add-btn-tooltip add-btn-tooltip" data-toggle="modal" title="View Details"></i>
                            &nbsp;&nbsp;
                            <i data-target="#modalStudentEdit" class="icon-th-list add-btn-tooltip" data-toggle="modal" title="Edit Details"></i>
                            &nbsp;&nbsp;
                            <i data-target="#modalStudentDelete" class="icon-trash add-btn-tooltip" data-toggle="modal" title="Delete this Record"></i>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>2</td>
                          <td>CIVITM143</td>
                          <td>Name 2</td>
                          <td>Civil</td>
                          <td><span class="label label-success">Approved</span></td>
                          <td>
                            <i class="icon-user add-btn-tooltip" data-toggle="tooltip" title="View Details"></i>
                            &nbsp;&nbsp;
                            <i class="icon-th-list add-btn-tooltip" data-toggle="tooltip" title="Edit Details"></i>
                            &nbsp;&nbsp;
                            <i class="icon-trash add-btn-tooltip" data-toggle="tooltip" title="Delete this Record"></i>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>3</td>
                          <td>ECEITM263</td>
                          <td>Abhishek</td>
                          <td>ECE</td>
                          <td><span class="label label-important">Not Approved</span></td>
                          <td>
                            <i class="icon-user add-btn-tooltip" data-toggle="tooltip" title="View Details"></i>
                            &nbsp;&nbsp;
                            <i class="icon-th-list add-btn-tooltip" data-toggle="tooltip" title="Edit Details"></i>
                            &nbsp;&nbsp;
                            <i class="icon-trash add-btn-tooltip" data-toggle="tooltip" title="Delete this Record"></i>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>4</td>
                          <td>CSEITM258</td>
                          <td>Name 3</td>
                          <td>CSE/IT</td>
                          <td><span id="noapp" class="label add-btn-tooltip" data-toggle="tooltip" title="Click to Approve">Pending</span>
                              <span id="app" class="label label-success not-visible">Approved</span>
                          </td>
                          <td>
                            <i class="icon-user add-btn-tooltip" data-toggle="tooltip" title="View Details"></i>
                            &nbsp;&nbsp;
                            <i class="icon-th-list add-btn-tooltip" data-toggle="tooltip" title="Edit Details"></i>
                            &nbsp;&nbsp;
                            <i class="icon-trash add-btn-tooltip" data-toggle="tooltip" title="Delete this Record"></i>
                          </td>
                        </tr>
                      </tbody>
                    </table>