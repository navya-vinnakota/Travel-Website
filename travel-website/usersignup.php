<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$mobile= $_POST['mobile'];
$host = "localhost";
$dbUsername="root";
$dbPassword="";
$dbname = "dp";
  // Database connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if($conn->connect_error){
    echo "$conn->connect_error";

  } else {
    $stmt ="insert into usersignup values
    ('$name' , '$email', '$password', '$confirm', '$mobile')";
    //$stmt = mysqli_query($connect, 'INSERT INTO usersignup(Username, Email-Id, Password, Confirmed-Password, Mobile-Number) VALUES ("'.$name.'","'.$email.'","'.$password.'","'.$confirm.'","'.$mobile.'")');
    //$stmt->bind_param($fname, $lname, $package, $mail, $phone, $nopass, $transport, $days, $payement);
    //$execval = $stmt->execute();
    //echo $execval;
    mysqli_query($conn,$stmt);

    header("location:login.html");


  }
?>
