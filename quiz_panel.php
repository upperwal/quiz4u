<h4 class="theme-colour">Quiz Panel</h4>
                    <button data-target="#myModal" class="btn btn-primary btn-mini btn-width add-btn-tooltip" data-toggle="modal" title="Add Quiz">Create</button>
                  
                    <button data-target="#modalFacultyEdit" class="btn btn-primary btn-mini btn-width add-btn-tooltip" data-toggle="modal" title="Edit Quiz Details">Edit</button>
                    <button data-target="#modalDelete" class="btn btn-danger btn-mini btn-width add-btn-tooltip" data-toggle="modal" title="Delete Quiz">Delete</button>

                    <hr>
                   
 
                    
                      <div id="myModal" class="modal hide fade modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h3 id="myModalLabel">Create a new Quiz</h3>
                        </div>
                        <div class="modal-body">
                          <!--Form to add Faculty BEGINS-->
                          <form name="booking" action="" method="post" onsubmit="return validateForm()" id="margin-top-15">
                            <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Quiz UID:</label>
                            </div>
                            <div class="span4">
                              QZ142
                            </div>
                            <div class="span2">
                              <label class="font-20">Quiz Name:</label>
                            </div>
                            <div class="span4">
                              <input type="text" name="inputName" id="inputName" placeholder="Quiz Name">
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Quiz Assigned to:</label>
                            </div>
                            <div class="span4">
                              <select name="yyy" id="yyy" class="select-mini">
                                <option value="Female">Year</option>
                                <option value="Male">2010</option>
                                <option value="Male">2011</option>
                                <option value="Male">2012</option>
                                <option value="Male">2013</option>
                              </select>
                              <select name="yyy" id="yyy" class="select-mini">
                                <option value="Female">Branch</option>
                                <option value="Male">CSE</option>
                                <option value="Male">Civil</option>
                                <option value="Male">IT</option>
                                <option value="Male">ECE</option>
                              </select>
                              <select name="yyy" id="yyy" class="select-mini">
                                <option value="Female">Sec</option>
                                <option value="Male">A</option>
                                <option value="Male">B</option>
                                <option value="Male">C</option>
                                <option value="Male">D</option>
                                <option value="Male">E</option>
                              </select>
                            </div>
                            <div class="span2">
                              <label class="font-20">Quiz Duration:</label>
                            </div>
                            <div class="span4">
                              <input type="text" name="inputName" id="inputName" placeholder="eg. 30 (in min)">
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>


                          <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Quiz Date:</label>
                            </div>
                            <div class="span4">
                              <input type="text" name="inputName" id="dp1" data-date="09-04-2013" data-date-format="dd-mm-yyyy" placeholder="DD-MM-YYYY">
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                            <div class="span2">
                              <label class="font-20">Quiz Time:</label>
                            </div>
                            <div class="span4">
                              <div class="bootstrap-timepicker">
                                <input id="timepicker4" type="text" placeholder="HH:MM AM/PM">
                              </div>
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>
                          <hr class="hr-crquiz">

                          <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Question:</label>
                            </div>
                            <div class="span10">
                              <input type="text" name="inputEmail" id="inputEmail" class="span12" placeholder="Enter your Question here.">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your organization.
                              </div>
                            </div>
                          </div>


                          <div class="row-fluid">
                            <div class="span2"></div>
                            <div class="span10">
                              <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Option 1:</label>
                            </div>
                            <div class="span4">
                              <div class="input-prepend span11">
                                <span class="add-on"><input type="checkbox"></span>
                                <input type="text" name="inputEmail" id="prependedInput" class="span12" placeholder="Enter Option 1">
                              </div>
                              <div class="alert alert-error not-visible" id="prependedInput">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                            <div class="span2">
                              <label class="font-20">Option 2:</label>
                            </div>
                            <div class="span4">
                              <div class="input-prepend span11">
                                <span class="add-on"><input type="checkbox"></span>
                                <input type="text" name="inputEmail" id="prependedInput" class="span12" placeholder="Enter Option 2">
                              </div>
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Option 3:</label>
                            </div>
                            <div class="span4">
                              <div class="input-prepend span11">
                                <span class="add-on"><input type="checkbox"></span>
                                <input type="text" name="inputEmail" id="prependedInput" class="span12" placeholder="Enter Option 3">
                              </div>
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                            <div class="span2">
                              <label class="font-20">Option 4:</label>
                            </div>
                            <div class="span4">
                              <div class="input-prepend span11">
                                <span class="add-on"><input type="checkbox"></span>
                                <input type="text" name="inputEmail" id="prependedInput" class="span12" placeholder="Enter Option 4">
                              </div>
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>
                            </div>
                          </div>



                        </form>
                          <!--Form to add Faculty ENDS-->
                        </div>
                        <div class="modal-footer">
                          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                          <button class="btn btn-primary">Save and Exit</button>
                          <button class="btn btn-success">Save and Add Another Question</button>
                        </div>
                    </div>


                    <!--Edit Faculty Modal BEGINS-->
                    <div id="modalFacultyEdit" class="modal hide fade modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h3 id="myModalLabel">Edit Quiz</h3>
                        </div>
                        <div class="modal-body">
                          <!--Form to add Faculty BEGINS-->
                          <form name="booking" action="" method="post" onsubmit="return validateForm()" id="margin-top-15">
                            <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Quiz UID:</label>
                            </div>
                            <div class="span4">
                              QZ142
                            </div>
                            <div class="span2">
                              <label class="font-20">Quiz Name:</label>
                            </div>
                            <div class="span4">
                              <input type="text" name="inputName" id="inputName" value="Quiz Name">
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Quiz Assigned to:</label>
                            </div>
                            <div class="span4">
                              <select name="yyy" id="yyy" class="select-mini">
                                <option value="Female">Year</option>
                                <option value="Male">2010</option>
                                <option value="Male">2011</option>
                                <option value="Male">2012</option>
                                <option value="Male">2013</option>
                              </select>
                              <select name="yyy" id="yyy" class="select-mini">
                                <option value="Female">Branch</option>
                                <option value="Male">CSE</option>
                                <option value="Male">Civil</option>
                                <option value="Male">IT</option>
                                <option value="Male">ECE</option>
                              </select>
                              <select name="yyy" id="yyy" class="select-mini">
                                <option value="Female">Sec</option>
                                <option value="Male">A</option>
                                <option value="Male">B</option>
                                <option value="Male">C</option>
                                <option value="Male">D</option>
                                <option value="Male">E</option>
                              </select>
                            </div>
                            <div class="span2">
                              <label class="font-20">Quiz Duration:</label>
                            </div>
                            <div class="span4">
                              <input type="text" name="inputName" id="inputName" value="eg. 30 (in min)">
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>


                          <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Quiz Date:</label>
                            </div>
                            <div class="span4">
                              <input type="text" name="inputName" id="dp2" data-date="09-04-2013" data-date-format="dd-mm-yyyy" value="03-07-2013">
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                            <div class="span2">
                              <label class="font-20">Quiz Time:</label>
                            </div>
                            <div class="span4">
                              <div class="bootstrap-timepicker">
                                <input id="timepicker5" type="text" value="01:10 PM">
                              </div>
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>





                          <div id="myModal2" class="modal hide fade modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h3 id="myModalLabel">Create a new Quiz</h3>
                        </div>
                        <div class="modal-body">
                          <!--Form to add Faculty BEGINS-->
                          <form name="booking" action="" method="post" onsubmit="return validateForm()" id="margin-top-15">
                            <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Quiz UID:</label>
                            </div>
                            <div class="span4">
                              QZ142
                            </div>
                            <div class="span2">
                              <label class="font-20">Quiz Name:</label>
                            </div>
                            <div class="span4">
                              <input type="text" name="inputName" id="inputName" placeholder="Quiz Name">
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Quiz Assigned to:</label>
                            </div>
                            <div class="span4">
                              <select name="yyy" id="yyy" class="select-mini">
                                <option value="Female">Year</option>
                                <option value="Male">2010</option>
                                <option value="Male">2011</option>
                                <option value="Male">2012</option>
                                <option value="Male">2013</option>
                              </select>
                              <select name="yyy" id="yyy" class="select-mini">
                                <option value="Female">Branch</option>
                                <option value="Male">CSE</option>
                                <option value="Male">Civil</option>
                                <option value="Male">IT</option>
                                <option value="Male">ECE</option>
                              </select>
                              <select name="yyy" id="yyy" class="select-mini">
                                <option value="Female">Sec</option>
                                <option value="Male">A</option>
                                <option value="Male">B</option>
                                <option value="Male">C</option>
                                <option value="Male">D</option>
                                <option value="Male">E</option>
                              </select>
                            </div>
                            <div class="span2">
                              <label class="font-20">Quiz Duration:</label>
                            </div>
                            <div class="span4">
                              <input type="text" name="inputName" id="inputName" placeholder="eg. 30 (in min)">
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>


                          <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Quiz Date:</label>
                            </div>
                            <div class="span4">
                              <input type="text" name="inputName" id="dp1" data-date="09-04-2013" data-date-format="dd-mm-yyyy" placeholder="DD-MM-YYYY">
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                            <div class="span2">
                              <label class="font-20">Quiz Time:</label>
                            </div>
                            <div class="span4">
                              <div class="bootstrap-timepicker">
                                <input id="timepicker4" type="text" placeholder="HH:MM AM/PM">
                              </div>
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>
                          <hr class="hr-crquiz">

                          <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Question:</label>
                            </div>
                            <div class="span10">
                              <input type="text" name="inputEmail" id="inputEmail" class="span12" placeholder="Enter your Question here.">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your organization.
                              </div>
                            </div>
                          </div>


                          <div class="row-fluid">
                            <div class="span2"></div>
                            <div class="span10">
                              <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Option 1:</label>
                            </div>
                            <div class="span4">
                              <div class="input-prepend span11">
                                <span class="add-on"><input type="checkbox"></span>
                                <input type="text" name="inputEmail" id="prependedInput" class="span12" placeholder="Enter Option 1">
                              </div>
                              <div class="alert alert-error not-visible" id="prependedInput">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                            <div class="span2">
                              <label class="font-20">Option 2:</label>
                            </div>
                            <div class="span4">
                              <div class="input-prepend span11">
                                <span class="add-on"><input type="checkbox"></span>
                                <input type="text" name="inputEmail" id="prependedInput" class="span12" placeholder="Enter Option 2">
                              </div>
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span2">
                              <label class="font-20">Option 3:</label>
                            </div>
                            <div class="span4">
                              <div class="input-prepend span11">
                                <span class="add-on"><input type="checkbox"></span>
                                <input type="text" name="inputEmail" id="prependedInput" class="span12" placeholder="Enter Option 3">
                              </div>
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                            <div class="span2">
                              <label class="font-20">Option 4:</label>
                            </div>
                            <div class="span4">
                              <div class="input-prepend span11">
                                <span class="add-on"><input type="checkbox"></span>
                                <input type="text" name="inputEmail" id="prependedInput" class="span12" placeholder="Enter Option 4">
                              </div>
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>
                            </div>
                          </div>



                        </form>
                          <!--Form to add Faculty ENDS-->
                        </div>
                        <div class="modal-footer">
                          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                          <button class="btn btn-primary">Save and Exit</button>
                          <button class="btn btn-success">Save and Add Another Question</button>
                        </div>
                    </div>







                          <hr class="hr-crquiz">
                          <h4>List of Questions</h4>
                          <button data-target="#myModal2" class="btn btn-primary btn-mini btn-width add-btn-tooltip" data-toggle="modal" title="Add Question">Add</button>
                    <button data-target="#myModal" class="btn btn-primary btn-mini btn-width add-btn-tooltip" data-toggle="modal" title="Add Quiz">Create</button>
                    <button class="btn btn-primary btn-mini btn-width add-btn-tooltip" title="Edit Question">Edit</button>
                    <button class="btn btn-danger btn-mini btn-width add-btn-tooltip" title="Delete Question">Delete</button>
                          <table class="span12">
                      <tbody class="edit-quiz-modal">
                        <tr>
                          <th><input type="checkbox" class="select-all"></th>
                          <th>QNo.</th>
                          <th width="20%">Question</th>
                          <th>Option 1</th>
                          <th>Option 2</th>
                          <th>Option 3</th>
                          <th>Option 4</th>
                          <th>Alter/Delete</th>
                        </tr>
                        <tr>
                          <td><input type="checkbox"/></td>
                          <td>1</td>
                          <td>3.4E - 38 is equivalent to?</td>
                          <td>3.4 x 10 x 38</td>
                          <td>3.4 x 38</td>
                          <td>3.4 x 10^-38</td>
                          <td>None of these</td>
                          <td>
                            <i data-target="#modalDetails" class="icon-user add-btn-tooltip add-btn-tooltip" data-toggle="modal" title="View Details of this Faculty"></i>
                            &nbsp;&nbsp;
                            <i data-target="#modalFacultyEdit" class="icon-th-list add-btn-tooltip" data-toggle="modal" title="Edit Details"></i>
                            &nbsp;&nbsp;
                            <i data-target="#modalDelete" class="icon-trash add-btn-tooltip" data-toggle="modal" title="Delete this Faculty"></i>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"/></td>
                          <td>1</td>
                          <td>3.4E - 38 is equivalent to?</td>
                          <td>3.4 x 10 x 38</td>
                          <td>3.4 x 38</td>
                          <td>3.4 x 10^-38</td>
                          <td>None of these</td>
                          <td>
                            <i data-target="#modalDetails" class="icon-user add-btn-tooltip add-btn-tooltip" data-toggle="modal" title="View Details of this Faculty"></i>
                            &nbsp;&nbsp;
                            <i data-target="#modalFacultyEdit" class="icon-th-list add-btn-tooltip" data-toggle="modal" title="Edit Details"></i>
                            &nbsp;&nbsp;
                            <i data-target="#modalDelete" class="icon-trash add-btn-tooltip" data-toggle="modal" title="Delete this Faculty"></i>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"/></td>
                          <td>1</td>
                          <td>3.4E - 38 is equivalent to?</td>
                          <td>3.4 x 10 x 38</td>
                          <td>3.4 x 38</td>
                          <td>3.4 x 10^-38</td>
                          <td>None of these</td>
                          <td>
                            <i data-target="#modalDetails" class="icon-user add-btn-tooltip add-btn-tooltip" data-toggle="modal" title="View Details of this Faculty"></i>
                            &nbsp;&nbsp;
                            <i data-target="#modalFacultyEdit" class="icon-th-list add-btn-tooltip" data-toggle="modal" title="Edit Details"></i>
                            &nbsp;&nbsp;
                            <i data-target="#modalDelete" class="icon-trash add-btn-tooltip" data-toggle="modal" title="Delete this Faculty"></i>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"/></td>
                          <td>1</td>
                          <td>3.4E - 38 is equivalent to?</td>
                          <td>3.4 x 10 x 38</td>
                          <td>3.4 x 38</td>
                          <td>3.4 x 10^-38</td>
                          <td>None of these</td>
                          <td>
                            <i data-target="#modalDetails" class="icon-user add-btn-tooltip add-btn-tooltip" data-toggle="modal" title="View Details of this Faculty"></i>
                            &nbsp;&nbsp;
                            <i data-target="#modalFacultyEdit" class="icon-th-list add-btn-tooltip" data-toggle="modal" title="Edit Details"></i>
                            &nbsp;&nbsp;
                            <i data-target="#modalDelete" class="icon-trash add-btn-tooltip" data-toggle="modal" title="Delete this Faculty"></i>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"/></td>
                          <td>1</td>
                          <td>3.4E - 38 is equivalent to?</td>
                          <td>3.4 x 10 x 38</td>
                          <td>3.4 x 38</td>
                          <td>3.4 x 10^-38</td>
                          <td>None of these</td>
                          <td>
                            <i data-target="#modalDetails" class="icon-user add-btn-tooltip add-btn-tooltip" data-toggle="modal" title="View Details of this Faculty"></i>
                            &nbsp;&nbsp;
                            <i data-target="#modalFacultyEdit" class="icon-th-list add-btn-tooltip" data-toggle="modal" title="Edit Details"></i>
                            &nbsp;&nbsp;
                            <i data-target="#modalDelete" class="icon-trash add-btn-tooltip" data-toggle="modal" title="Delete this Faculty"></i>
                          </td>
                        </tr>
                      </tbody>
                    </table>


                          



                        </form>
                          <!--Form to add Faculty ENDS-->
                        </div>
                        <div class="modal-footer">
                          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                          <button class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    <!--Edit Faculty Modal END-->



                    <div id="modalDetails" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h3 id="myModalLabel">Faculty Details</h3>
                        </div>
                        <div class="modal-body">
                          
                            <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Faculty Name:</label>
                            </div>
                            <div class="span6">
                              Abhishek Upperwal
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">UID:</label>
                            </div>
                            <div class="span6">
                              CSEITM154
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Department:</label>
                            </div>
                            <div class="span6">
                              CSE/IT
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Email:</label>
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

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Designation:</label>
                            </div>
                            <div class="span6">
                              Example
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Qualification:</label>
                            </div>
                            <div class="span6">
                              Example Degree
                            </div>
                          </div>

                       
                          
                        </div>
                        <div class="modal-footer">
                          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                        </div>
                    </div>

                    <!--Modal Delete BEGINS-->
                    <div class="alert alert-block alert-error fade in modal hide" id="modalDelete" aria-labelledby="myModalLabel" aria-hidden="true" >
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
                          <th>Quiz UID</th>
                          <th>Quiz Name</th>
                          <th>No. of Ques</th>
                          <th>Status</th>
                          <th>Alter/Delete</th>
                        </tr>
                        <tr>
                          <td><input type="checkbox"/></td>
                          <td>1</td>
                          <td>QZCSE125</td>
                          <td>Numerical Methods</td>
                          <td>20</td>
                          <td><span class="label label-important">Expired</span></td>
                          <td>
                            <i data-target="#modalDetails" class="icon-user add-btn-tooltip add-btn-tooltip" data-toggle="modal" title="<?php echo $view_tooltip; ?>"></i>
                            &nbsp;&nbsp;
                            <i data-target="#modalFacultyEdit" class="icon-th-list add-btn-tooltip" data-toggle="modal" title="<?php echo $edit_tooltip; ?>"></i>
                            &nbsp;&nbsp;
                            <i data-target="#modalDelete" class="icon-trash add-btn-tooltip" data-toggle="modal" title="<?php echo $delete_tooltip; ?>"></i>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>2</td>
                          <td>QZCIV143</td>
                          <td>Cement Structures</td>
                          <td>30</td>
                          <td><span class="label label-success">Pending</span></td>
                          <td>
                            <i class="icon-user add-btn-tooltip" data-toggle="tooltip" title="<?php echo $view_tooltip; ?>"></i>
                            &nbsp;&nbsp;
                            <i class="icon-th-list add-btn-tooltip" data-toggle="tooltip" title="<?php echo $edit_tooltip; ?>"></i>
                            &nbsp;&nbsp;
                            <i class="icon-trash add-btn-tooltip" data-toggle="tooltip" title="<?php echo $delete_tooltip; ?>"></i>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>3</td>
                          <td>QZIT087</td>
                          <td>OS Basics</td>
                          <td>20</td>
                          <td><span class="label label-important">Expired</span></td>
                          <td>
                            <i class="icon-user add-btn-tooltip" data-toggle="tooltip" title="<?php echo $view_tooltip; ?>"></i>
                            &nbsp;&nbsp;
                            <i class="icon-th-list add-btn-tooltip" data-toggle="tooltip" title="<?php echo $edit_tooltip; ?>"></i>
                            &nbsp;&nbsp;
                            <i class="icon-trash add-btn-tooltip" data-toggle="tooltip" title="<?php echo $delete_tooltip; ?>"></i>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>4</td>
                          <td>QZECE231</td>
                          <td>PCB Design</td>
                          <td>25</td>
                          <td><span class="label label-success add-btn-tooltip">Pending</span>
                          </td>
                          <td>
                            <i class="icon-user add-btn-tooltip" data-toggle="tooltip" title="<?php echo $view_tooltip; ?>"></i>
                            &nbsp;&nbsp;
                            <i class="icon-th-list add-btn-tooltip" data-toggle="tooltip" title="<?php echo $edit_tooltip; ?>"></i>
                            &nbsp;&nbsp;
                            <i class="icon-trash add-btn-tooltip" data-toggle="tooltip" title="<?php echo $delete_tooltip; ?>"></i>
                          </td>
                        </tr>
                      </tbody>
                    </table>