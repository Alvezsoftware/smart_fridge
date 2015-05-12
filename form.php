<?php


if(isset($_POST['title'])){
// Create connection
$con = mysqli_connect("localhost","root","","smartfridge");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    $name = $_POST['title'];
    $quantity = $_POST['quantity'];
	$barcode = "";
    $description =  $_POST['description'];
    $expiry_date = "";
    $searchtype =  "";

$sql ="INSERT INTO `item`(`Name`, `Quantity`, `Description`) VALUES ('$name',$quantity,'$description')";    
 if(mysqli_query($con, $sql)){
    $sql = "SELECT * FROM `item` WHERE 1";
    $myData = mysqli_query($con, $sql);
        while ($record = mysqli_fetch_array($myData)) {
        echo $record['Name'];
        echo ' <br/>';
        echo $record['Quantity'];
        echo ' <br/>';
        echo $record['Description'];
        echo ' <br/>';
     }
    echo "Connected successfully";
 }else{
     echo "Fail";
 }
mysqli_close($con);
}

?>