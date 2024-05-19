<<<<<<< HEAD
<?php
//test2 to see if changes are pushed        
=======
<?php      
>>>>>>> 5ba85972db8d5ceb7110b080959c97c828c680d8
        $host = "localhost";  
        $user = "root";  
        $password = 'Vmanisyourmans12';  
        $db_name = "phptest";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  