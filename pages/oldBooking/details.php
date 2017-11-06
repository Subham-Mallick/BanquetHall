
<!DOCTYPE html>
<html lang="">
<head>
<title>Banquet Booking</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="bgded overlay" style="background-image:url('../../images/demo/backgrounds/extra/1.jpg');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="../../index.php">Banquet Booking</a></h1>
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
          <h1 class="heading"><span style="color: red;">Welcome back</span> 

          <?php
          session_start();
          include("../serverconnect.php");
          $email = $_SESSION['record_email'];

          $code = $_SESSION['record_code'];

          $sql = "SELECT * FROM data WHERE code='$code' and email='$email'";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          echo $row["name"];
          ?>

        </h1>
          
          <p> Phone Number registered is <?php echo $row["phone"]; ?></p>
          <p> Booking start date is <?php echo $row["date_start"]; ?></p>
          <p> Booking end date is <?php echo $row["date_end"]; ?></p>
          <p> Status of booking <?php echo $row["status"]; ?></p>
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