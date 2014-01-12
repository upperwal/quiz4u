<h4 class="theme-colour">Your Quiz Database</h4>
                    
                    <hr>
                   
 
                    
                      


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
                          <td><span class="label add-btn-tooltip">Pending</span>
                          <td>
                            <i data-target="#modalDetails" class="icon-user add-btn-tooltip add-btn-tooltip" data-toggle="modal" title="<?php echo $view_tooltip; ?>"></i>
                            
                            &nbsp;&nbsp;
                            <i data-target="#modalDelete" class="icon-off add-btn-tooltip" data-toggle="modal" title="<?php echo $delete_tooltip; ?>"></i>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>2</td>
                          <td>QZCIV143</td>
                          <td>Cement Structures</td>
                          <td>30</td>
                          <td><span class="label label-important">Bunked</span></td>
                          <td>
                            <i class="icon-user add-btn-tooltip" data-toggle="tooltip" title="<?php echo $view_tooltip; ?>"></i>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>3</td>
                          <td>QZIT087</td>
                          <td>OS Basics</td>
                          <td>20</td>
                          <td><span class="label label-success">Taken</span></td>
                          <td>
                            <i class="icon-user add-btn-tooltip" data-toggle="tooltip" title="<?php echo $view_tooltip; ?>"></i>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>4</td>
                          <td>QZECE231</td>
                          <td>PCB Design</td>
                          <td>25</td>
                          <td><span class="label add-btn-tooltip">Pending</span>
                          </td>
                          <td>
                            <i class="icon-user add-btn-tooltip" data-toggle="tooltip" title="<?php echo $view_tooltip; ?>"></i>
                            &nbsp;&nbsp;
                            <i class="icon-off add-btn-tooltip" data-toggle="tooltip" title="<?php echo $delete_tooltip; ?>"></i>
                          </td>
                        </tr>
                      </tbody>
                    </table>