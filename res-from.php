
<?php require "config.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>res/from</title>

	<link rel="stylesheet" type="text/css" href="regstyle.css">


</head>
<body>

	<?php

	if (isset ($_POST['regsbtn'])) {

	$u_name = $_POST['Usname'];
	$u_us_name = $_POST['usrname'];
	$u_email = $_POST['usemail'];
	$u_phne_no = $_POST['usphon_no'];
	$u_blood_groop = $_POST['blood_gr'];
	$u_divition = $_POST['u_divison'];
	$u_zilla = $_POST['u_szila'];
	$u_villegs = $_POST['usvileg'];
	$u_password = $_POST['loginpassword'];
	$u_add_datetime = date('Y-m-d H:i:s');


	$sql = "INSERT INTO users(u_name, u_us_name, u_email, u_phne_no, u_blood_groop, u_divition, u_zilla, u_villegs, u_password, u_add_datetime) VALUES ('$u_name', '$u_us_name', '$u_email', '$u_phne_no', '$u_blood_groop', '$u_divition', '$u_zilla', '$u_villegs', '$u_password', '$u_add_datetime')";

	echo  $sql;

	if ($conn->query($sql)===true) {
		$sms = "all done boss";
	}else{
		$err = "boss project error<br>".$conn->error;
	}
}


	?>



	<div class="reg_header">
		<div class="login">
			<div class="title">Registration From</div>

			<?php 
			if (isset($sms)) {
				echo '<div class="secess" style="background: white; padding:10px 20px ; color: green;"> '.$sms.'</div>';
			}
			?>

			<?php 
			if (isset($err)) {
				echo '<div class="fald" style="background: white; padding:10px 20px ; color: red;"> '.$err.'</div>';
			}
			?>


			<form class="login-from" action="" method="post">
				<input type="text" name="Usname" placeholder="Enter Your Name">
				<input type="text" name="usrname" placeholder="Enter Your Usrname" required>
				<input type="email" name="usemail" placeholder="Enter Your Email" required>
				<input type="text" name="usphon_no" placeholder="Enter Your Phone No" value="+880" required>

         
				<select name="blood_gr" required>
					<option value="">Select your blood</option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
				</select>

				<select name="u_divison">
					<option value="">Select your divison</option>
					<option value="Barisal">Barisal</option>
					<option value="Chittagong">Chittagong</option>
					<option value="Dhaka">Dhaka</option>
					<option value="Khulna">Khulna</option>
					<option value="Mymensingh">Mymensingh</option>
					<option value="Rajshahi">Rajshahi</option>
					<option value="Rangpur">Rangpur</option>
					<option value="Sylhet">Sylhet</option>
				</select>
				<input type="text" name="u_szila" placeholder="Enter Your Zilla">
				<input type="text" name="usvileg" placeholder="Enter Your Vilegge">
				
				<input type="password" name="loginpassword" placeholder="Password" required>
				<input type="submit" name="regsbtn" value="Registration" class="regs_btn">
			</form>

			<div class="back-btn">
				<button>Back Now</button>
			</div>
		</div>
	</div>

</body>
</html>