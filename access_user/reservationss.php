<?php
include_once('Header.php');
include_once('connection.php');
?>

</head>

<body>


                
                    <div class="col-sm-7" >

                        <div class="" ><!--Reservation Piece of Code-->

                            <div class="panel panel-ybtm-red" >
                                <div class="panel-heading">
                                    <h3 class="panel-title">Reservation</h3>
                                    
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
                                     
                                      <div class="form-group" >
                                        <label  for="exampleInputCountry">Date Of departure&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        
                                         <input type="text" id="datepicker" size="12px">
                                     </div>
                                      <div class="form-group">
                                        <label  for="exampleInputCountry">Number Of Passangers&nbsp;</label>
                                        
                                         <select name="Select" id="passangers">
                                            <option value="Select">--Select--</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">Family (5 Members)</option>
                                            </select> 
                                                                      
                                     </div>
                                       <div class="form-group" style="margin-left:250px;">
                          					<button type="submit" class="btn btn-success btn-md" id="submit">Submit Request </button>
                            			</div>
                                </div>
                            </div>
                        </div>
<?php
       $query = "INSERT INTO reservations "; 
?>
</div>
</div>
 <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>