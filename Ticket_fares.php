<?php
include_once("Header.php");

?>
                <div class="row">
                    <div class="col-sm-4">
                        
                        
                        <div class="">
                            <div class="panel panel-ybtm-dark">
                                <div class="panel-heading">
                                    <h3 class="panel-title">SCHEDULES</h3>
                                </div>
                                <div class="panel-body">
                                 	
                                    <ul type="circle">
                                 	<a href="Schedule.php" style="color:#000000"><li>Schedules</li></a>
                                    <hr>
                                 	<a href="#" style="color:#000000"><li>Ticket Fares</li></a>
                                	</ul>
                                    
                                 </div>
                            </div>
                        </div>


                      

                      

                    </div>

                    <div class="col-sm-7">

                        <div class=""><!--Reservation Piece of Code-->

                            <div class="panel panel-ybtm-red">
                                
                                    <div class="panel-heading">
                                    <h3 class="panel-title">Ticket Fares</h3>
                                    
                                    </div>
                               
                                
                                <div class="panel-body" style="margin-top:30px">
                                 <div class="form-group">
                                    <form class="form-group" name="ticket-fares" action="visitor/ticket_fares2.php" method="POST">
                                    <label  for="exampleInput" style="margin-left:20px">Departure</label>
                                     <select style="margin-left:70px" name="source">
                                        <option value="Select">--Select--</option>
                                            <option value="Lhr">Lahore</option>
                                            <option value="Khi">Karchi</option>
                                            <option value="Isl">Islamabad</option>
                                            <option value="Isl">Peshawer</option>
                                        </select> 
                                    <label  for="exampleInput" style="margin-left:20px">Destination</label>
                                     <select style="margin-left:70px" name="destination">
                                        <option value="Select">--Select--</option>
                                            <option value="Lhr">Lahore</option>
                                            <option value="Khi">Karchi</option>
                                            <option value="Isl">Islamabad</option>
                                            <option value="Isl">Peshawer</option>
                                        </select> 
                                    

              					</div>
                                    <div class="form-group">
                                     <button style="margin-left:200px" type="Submit"  name="Search" class="btn btn-primary">Search</button> 
                                     
                                     
                                     
                                    </div>
                                     </form>          
                                </div>
                            </div>
                        </div>

                    

                    </div>
                    </div>