<?php
$username =$_POST['username'];
$password =$_POST['password'];

$host = "localhost";
$dbUsername="root";
$dbPassword="";
$dbname = "dp";
  // Database connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if($conn->connect_error){
    echo "$conn->connect_error";

  } else {
    $stmt ="insert into Ulogin values
    ('$username' , '$password')";
    //$stmt->bind_param($fname, $lname, $package, $mail, $phone, $nopass, $transport, $days, $payement);
    //$execval = $stmt->execute();
    //echo $execval;
    mysqli_query($conn,$stmt);

   header("location:userprofile.html");


  }
?>
