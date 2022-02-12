<?php
$username=$_POST["username"];
$password=$_POST["password"];
 
$conn = new mysqli('localhost','root','','connectdb');
 
    $sql="INSERT INTO admin(username,password)values('$username','$password')";
    if($conn->query($sql)==TRUE)
    {
        echo "data inserted";
    }
    else{
        echo "Error:".$sql."<br>".$conn->error;
 
    }
?>