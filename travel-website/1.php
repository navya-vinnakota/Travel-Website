<html>
<head>
  <title>Ticket</title>
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko&display=swap">
    <style>
      body{
        background-color: lightblue;
      }

    </style>
</head>
<body>
<?php


$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "dp";

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
}

session_start();
if($_SESSION['is_login']){
 $fname = $GET['fname'];
} else {
 echo "<script> location.href='ulogin.php'; </script>";
}
$sql = "SELECT * FROM registration WHERE fname = {$GET['fname']}";
$result = $conn->query($sql);
if($result && $result->num_rows){
 $row = $result->fetch_assoc();
 echo "<div class='ml-5 mt-5'>
 <table class='table'>
  <tbody>
   <tr>
     <th>firstname</th>
     <td>".$row['fname']."</td>
   </tr>
   <tr>
     <th>lastname</th>
     <td>".$row['lname']."</td>
   </tr>
   <tr>
   <th>Package</th>
   <td>".$row['package']."</td>
  </tr>
   <tr>
    <th>email</th>
    <td>".$row['mail']."</td>
   </tr>
   <tr>
    <th>phone</th>
    <td>".$row['phone']."</td>
   </tr>
   <tr>
    <th>nopass</th>
    <td>".$row['nopass']."</td>
   </tr>
   <tr>
    <th>transport</th>
    <td>".$row['transport']."</td>
   </tr>
   <tr>
    <th>days</th>
    <td>".$row['days']."</td>
   </tr>
   <tr>
    <th>payment</th>
    <td>".$row['payment']."</td>
   </tr>

   <tr>
    <td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='Print' onClick='window.print()'></form></td>
  </tr>
  </tbody>
 </table> </div> ";

} else {
  echo "Failed";
}
?>
<?php
$conn->close();
?>
</body>
</html>
