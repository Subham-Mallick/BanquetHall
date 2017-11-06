<?php
include 'serverconnect.php';
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$code= generateRandomString(8);

$state = $_POST['state'];
$city = $_POST['city'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$rawdate1 = htmlentities($_POST['startdate']);
$startdate = date('Y-m-d', strtotime($rawdate1));

$rawdate2 = htmlentities($_POST['enddate']);
$enddate = date('Y-m-d', strtotime($rawdate2));


$address = $_POST['address'];
$occasion = $_POST['occasion'];
$guests = $_POST['guests'];
$info = $_POST['info'];

$sql="INSERT INTO data VALUES ('$state','$city','$name','$email','$phone','$startdate','$enddate','$address','$occasion','$guests','$info','$code','unattended')";
if ($conn->query($sql) === TRUE)
{
    //echo "New record created successfully";
} else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
<!DOCTYPE html>
<html lang="">
<head>
<title>BanquetHall</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/extra/1.jpg');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="../index.php" style="color: white;">Banquet<span style="color: #5379fa;">Hall</span></a></h1>
        <br>
      </div>


      <!-- ############################################################################### -->
      <!-- ######################################################################################### -->
    </header>
  </div>
  <div class="wrapper">
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <article>
        <center>
        	<h1 class="heading">Thank you </h1>

        	<p> Your Code is  <span style="color: #5379fa;"> <?php echo $code ?> </span> </p>
        </center>

      </article>
    </div>
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>