<?php      
    include('connection.php');  
    if(isset($_POST['submit']))
    {
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
    }
      
        //to prevent from mysqli injection  
        $username = stripcslashes($Username);  
        $password = stripcslashes($Password);  
        $username = mysqli_real_escape_string($con, $Username);  
        $password = mysqli_real_escape_string($con, $Password);  
      
        $sql = "select * FROM usertable where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  

            header('Location: banking.html');
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";
            

        }     