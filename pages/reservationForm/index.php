<!DOCTYPE HTML>
<html>
<head>
<title>BanquetHall</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery-1.12.0.min.js"></script>

</head>
<body>
		<div class="header w3ls">
			<h1><a href="../../index.php" style="color: white;">Banquet<span style="color: #5379fa;">Hall</span></a></h1>
		</div>
		
			<div class="main">
				<div class="main-section agile">
					<div class="login-form">
						<form action="../ThankYouPage.php" method="post">
							
							<ul>
								 <li class="text-info">State *</li>

								 <li>
								 	<input type="text" name="state" placeholder="" value="<?php echo $_GET["state"]?>" >
								 </li>
								 <div class="clear"></div>
							 </ul>

							 <ul>
								 <li class="text-info">City *</li>
								 <li><input type="text" name="city" placeholder="" value= "<?php echo $_GET["city"]?>" >
								 </li>
								 <div class="clear"></div>
							 </ul>

							<ul>
								 <li class="text-info">Full Name *</li>
								 <li><input type="text" name="name" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Email ID *</li>
								 <li><input type="text" name="email" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Phone Number *</li>
								 <li><input type="text" name="phone" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							  <ul>
								<li class="text-info">Booking Start Date *</li>
								<li class="dat"><input name="startdate" placeholder="yyyy-mm-dd" type="date" required=></li>
								
								<div class="clear"></div>
							</ul>
							<ul>
								<li class="text-info">Booking End Date *</li>
								<li class="dat"><input name="enddate" placeholder="yyyy-mm-dd" type="date" required=></li>
								
								<div class="clear"></div>
							</ul>
									<link rel="stylesheet" href="css/jquery-ui.css" />
										<script src="js/jquery-ui.js"></script>
											<script>
												$(function() {
												$( "#datepicker,#datepicker1" ).datepicker();
												});
											</script>
							<ul>
								<li class="text-info">Your Address *</li>
								<li><textarea name="address"></textarea></li>
								<div class="clear"></div>
							</ul>
							 
							 <ul>
								 <li class="text-info">Occasion *</li>
								 <li class="se">
								 	<select class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="occasion">
									<option> Select </option>
									<option value="Birthday">Birthday</option>
									<option value="Wedding">Wedding</option>
									<option value="Engagement">Engagement</option>
									<option value="Reception">Reception</option>
									<option value="Naming Ceremony">Naming Ceremony</option>
									<option value="Cooperate event">Cooperate event</option>
									<option value="Family Reunion">Family Reunion</option>
									<option value="Anniversary">Anniversary</option>
									<option value="Holiday Parties">Holiday Parties</option>
									<option value="Others">Others</option>
								  </select>
								</li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Number of Guests *</li>
								 <li class="se"> <select class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="guests">
									<option value="0"> Less than 50 </option>
									<option value="1"> Less than 100 </option>
									<option value="2"> Less than 150 </option>
									<option value="3"> Less than 200 </option>
									<option value="4"> Less than 250 </option>
									<option value="5"> Less than 300 </option>
									<option value="6"> Less than 350 </option>
									<option value="7"> Less than 400 </option>
									<option value="8"> Less than 450 </option>
									<option value="9"> Less than 500 </option>
									<option value="10"> Less than 1000 </option>
									<option value="11"> More than 1000 </option>
								  </select></li>
								 <div class="clear"></div>
							 </ul> 
							 <ul>
								<li class="text-info">Additional Information :</li>
								<li><textarea placeholder="State if you need any additional service you want" name="info"></textarea></li>
								<div class="clear"></div>
							</ul>
							<input type="submit" value="Submit">
							<div class="clear"></div>
						</form>
					</div>
				</div>
			</div>
</body>
</html>