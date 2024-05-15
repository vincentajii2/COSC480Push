<?php
    if(isset($_POST['submit']))
    {
        $Username = $_POST['Username'];
        $email = $_POST['Email'];
        $Password = $_POST['Password'];
    }
// database details

$host = "localhost";
$username = "root";
{
    $password = "Vmanisyourmans12";
}
$dbname = "phptest";

// creating a connection
$con = mysqli_connect($host, $username, $password, $dbname);

// to ensure that the connection is made
if (!$con)
{
    die("Connection failed!" . mysqli_connect_error());
}

// using sql to create a data entry query
$sql = "INSERT INTO test (id, Username, Email, Password) VALUES ('0', '$Username', '$email', '$Password')";

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
