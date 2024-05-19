<?php
    include('connection.php'); 
    if(isset($_POST['submit']))
    {
        $Username = $_POST['Username'];
        $email = $_POST['Email'];
        $Password = $_POST['Password'];
    }

// using sql to create a data entry query
$sql = "INSERT INTO usertable (id, Username, Email, Password) VALUES ('0', '$Username', '$email', '$Password')";

// send query to the database to add values and confirm if successful
$rs = mysqli_query($con, $sql);
if($rs)
{
    echo "Entries added!";
}

// close connection
mysqli_close($con);

header('Location: index.html');
exit;