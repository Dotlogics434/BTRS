<?php
include_once('Header.php');
?>
<p class="note">You are not logged in. <span class="text-danger">Access is limited.</span> <a href="#" class="text-success">Login</a> or <a href="#" class="text-success">see membership information</a> <strong>·</strong> YourBizToMine</p>

                <div class="row">
                    <div class="col-sm-4">
                        
                        
                        <div class="">
                            <div class="panel panel-ybtm-dark">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Schedules</h3>
                                </div>
                                <div class="panel-body">
                                 	
                                    <ul type="circle">
                                 	<a href="#" style="color:#000000"><li>Schedules</li></a>
                                    <hr>
                                    
                                 	<a href="Ticket_fares.php" style="color:#000000">Tcket Fares<li></li></a>
                                	</ul>
                                    
                                 </div>
                            </div>
                        </div>


                      

                      

                    </div>

                    <div class="col-sm-7">

                        <div class=""><!--Reservation Piece of Code-->

                            <div class="panel panel-ybtm-red">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Schedules</h3>
                                    
                                </div>
                                
                                <div class="panel-body">
                                
                                               <div class="form-group" style="word-spacing: 95px;">
                                        <label  for="exampleInputCountry">Departure </label>
                                        
                                         <select name="Select" id="Departure">
                                            <option value="Select">--Select--</option>
                                                <option value="Lhr">Lahore</option>
                                                <option value="Khi">Karchi</option>
                                                <option value="Isl">Islamabad</option>
                                                <option value="Isl">Peshawer</option>
                                            </select> 
                                            
                                     </div>
                                      <div class="form-group" style="word-spacing: 115px;">
                                        <label  for="exampleInputCountry">Arrival </label>
                                        
                                         <select name="Select" id="Arrival ">
                                            <option value="Select">--Select--</option>
                                                <option value="Lhr">Lahore</option>
                                                <option value="Khi">Karchi</option>
                                                <option value="Isl">Islamabad</option>
                                                <option value="Isl">Peshawer</option>
                                            </select> 
                                            
                                     </div>
                                     
                                     
                                      
                                       <div class="form-group" style="margin-left:250px;">
                          					<button type="submit" class="btn btn-success btn-md" id="submit">Submit</button>
                            			</div>
                                </div>
                            </div>
                        </div>

                    

                    </div>
                    </div>
