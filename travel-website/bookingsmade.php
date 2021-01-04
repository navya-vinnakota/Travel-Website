<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
   Bookings Made
  </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko&display=swap">
      <style>
      table,th,td{

        width: 1100px;
        margin-top: 100px;

      }
      .navbar-nav a{
        font-family: apple;
        font-size: 14px;
        text-transform: uppercase;
        font-weight: normal;
      }


      .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
      	color: #fff !important;
      }
      .navbar-light, .navbar-nav, .nav-link{
        color: #fff !important;
      }
      .navbar-nav{
        text-align: center;
      }
      .nav-link{
        padding: .2rem 1rem;
      }
      .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover{
        color: red !important;
      }
      .home{
        margin-left: 800px;

      }
      .btn {
        background-color: black;
        color:white;
      }
.section{
  padding-top: 54px;
  padding-bottom: 54px;
}
.underline{
 width: 100px;
 height: 06px;
 background-color: red;
}
.bg-occasions{
  background-image:url('3.jpg');
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative;
  background-attachment: fixed;
}
.heading{
  color: red;
  font-size: 22px;
  font-family: apple;
  font-weight: 500;
  text-align: center;
  padding-bottom: 25px;
}
.h1, h1 {
	font-size: 1.3 rem;
}
.footer-link{
  color: #fff;
  font-size: 14px;
  margin-bottom: 07px;
}
.f-14{
  font-size: 14px;

}
.home{
  margin-left: 800px;

}
.btn {
  background-color: black;
}
.btn:hover {
  background-color: red;
}
      </style>
  </head>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark ">
    <div class="container">
    <i class="fa fa-plane text-white" aria-hidden="true">  GUILLIVER TRAVELS</i>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">

       <li class="nav-item">
        <a class="nav-link active" href="bookingsmade.html">
         <i class="fa fa-plane text-white"></i>
         Bookings Made
        </a>
       </li>
       <li class="nav-item">
        <a class="nav-link active" href="logins.php">
         <i class="fa fa-user tet-white"></i>
         Users Till Date
        </a>
       </li>

  </ul>
  </div>
  </div>
  </nav>

  <table class="table table-striped table-dark">
<tr>
    <th>lname</th>
    <th>fname</th>
    <th>package</th>
    <th>mail</th>
    <th>phone</th>
    <th>passangers</th>
    <th>transport</th>
    <th>Days</th>
    <th>Payment</th>
</tr>
  <?php
  $con = mysqli_connect('localhost','root','','dp');
if($con){
	//echo "Successfully to connected to DB";
}else{
	echo "Fail to connect to DB";
}
  $sql="SELECT * FROM registration";
  $result = $con->query($sql);
  $check = mysqli_num_rows($result);
  if($check>0){
      while($row=$result-> fetch_assoc()){
          echo "<tr><td>". $row['first-name']
           ."</td><td>". $row['last-name']
            ."</td><td>". $row['package']
             ."</td><td>". $row['mail']
          ."</td><td>". $row['phone']
           ."</td><td>". $row['number-of-passangers']
            ."</td><td>". $row['transport']
           ."</td><td>" .$row['number-of-days']
            ."</td><td>". $row['payment'] ."</td></tr>";
          /* echo $row['temperature'];
          echo $row['oxygen_level'];
          echo $row['others'] ; */}
      echo "</table>";
  }
  else{
      echo "No data please connect to valid Database";
  }
  $con->close();
  ?>
</table>



<div class="home">
    <a href="admin.html" class="btn btn-info" role="button">Back to Home</a>
</div>
</body>
</html>
