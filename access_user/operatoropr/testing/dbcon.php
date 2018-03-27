<?php

	 $DB_host = "localhost";
	 $DB_user = "root";
	 $DB_pass = "toor";
	 $DB_name = "busticket";
	 
	 $MySQLiconn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($MySQLiconn->connect_errno)
     {
         die("ERROR : -> ".$MySQLiconn->connect_error);
     }

?>