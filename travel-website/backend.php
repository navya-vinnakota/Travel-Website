<?php
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$package =$_POST['package'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$nopass = $_POST['nopass'];
$transport=$_POST['transport'];
$days = $_POST['days'];
$payement = $_POST['payment'];
$host = "localhost";
$dbUsername="root";
$dbPassword="";
$dbname = "dp";
  // Database connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if($conn->connect_error){
    echo "$conn->connect_error";

  } else {
    $stmt ="insert into registration values
    ('$fname' , '$lname', '$package', '$mail', '$phone', '$nopass', '$transport', '$days', '$payement')";
    //$stmt->bind_param($fname, $lname, $package, $mail, $phone, $nopass, $transport, $days, $payement);
    //$execval = $stmt->execute();
    //echo $execval;
    mysqli_query($conn,$stmt);

    header("location:acknoweldgement.html");


  }
?>
