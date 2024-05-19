<?php
//test2 to see if changes are pushed        
        $host = "localhost";  
        $user = "root";  
        $password = 'Vmanisyourmans12';  
        $db_name = "phptest";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  