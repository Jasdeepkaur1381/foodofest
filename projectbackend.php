<?php 
    $insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $amount = $_POST['amount'];
    $address = $_POST['address'];
    $sql = "INSERT INTO `foodoweb`.`foodlist` (`name`, `email`, `item`, `quantity`, `amount`, `address`) VALUES ('$name', '$email', '$item', '$quantity', '$amount', '$address');";
    if($con->query($sql) == true){
        echo "Successfully inserted";}
        $con->close();}
?>