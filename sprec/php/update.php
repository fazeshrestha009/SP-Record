<?php
	session_start();
	if(isset($_SESSION['user'])){
		sleep (2);	
    	$std_id = (trim($_GET['ID']))?trim($_GET['ID']):false;
	    $f_name = (trim($_GET['F_name']))?trim($_GET['F_name']):false;
    	$l_name = (trim($_GET['L_name']))?trim($_GET['L_name']):false;
	    $password = (trim($_GET['Pasword']))?trim($_GET['Pasword']):false;
    	$gender = (trim($_GET['Gender']))?trim($_GET['Gender']):false;
	    $dob = (trim($_GET['DOB']))?trim($_GET['DOB']):false;
	    $contact = (trim($_GET['Contact']))?trim($_GET['Contact']):false;
    	$address = (trim($_GET['Address']))?trim($_GET['Address']):false;
	    $s_engineering = (trim($_GET['S_engineering']))?trim($_GET['S_engineering']):false;
    	$dbms = (trim($_GET['DBMS']))?trim($_GET['DBMS']):false;
	    $o_system = (trim($_GET['O_system']))?trim($_GET['O_system']):false;
    	$n_method = (trim($_GET['N_method']))?trim($_GET['N_method']):false;
	    $s_language = (trim($_GET['S_language']))?trim($_GET['S_language']):false;
	}else{
		echo "<script>window.alert('Redirecting...');
                window.location.href='login.php';</script>";
				session_destroy();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SP Record: Update detail</title>
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="../css/formStyle.css">

	<script defer src="../javaScript/sessDestroy.js "></script>
	<script defer src="../javaScript/date.js "></script>
	<script defer src="../javaScript/formVal.js "></script>
</head>
<body>
	<div class="dash">		
		<div class="space"></div>
		<ul class="menu">
			<li><h2>Dashboard</h2></li>
			<li><h3><a href="adminHome.php">Home</a></h3></li>
			<li><h3><a href="manageStd.php">Manage student</a></h3></li>
			<li><h3><a href="addStd.php">Add Student</a></h3></li>
			<li><h3><a href="changePsw.php">Change password</a></h3></li>
			<li><h3><a href="stdAttendance.php">Attendance</a></h3></li>
		</ul>
	</div>
	<div class="container">
		<div class="head">
			<h2><a href="adminHome.php">SP Record</a></h2>
			<div id="date">
				<div id="currentDate"></div>
				<div class="day"></div>
			</div>
			<div class="inp">
				<input type="button" name="logout" onclick="return logout()" value="Logout">
			</div>
		</div>
		<div class="main">
			<h1>Update student details</h1>
			<div class="box">
				<form method="POST" action="up.php" onsubmit="return validateForm()">
					<fieldset>
						<legend>Student Information</legend>
							<table>
								<tr>
									<td><label for="stdid">Student ID:</label></td>
									<td><input type="text" id="stdid" name="sid" readonly value="<?php echo $std_id ?>"></td>
								</tr>
								<tr>
									<td><label for="firstN">First Name:</label></td>
									<td><input type="text" id="firstN" name="firstName" value="<?php echo $f_name ?>"></td>
								</tr>
								<tr>
									<td><label for="lastN">Last Name:</label></td>
									<td><input type="text" id="lastN" name="lastName" value="<?php echo $l_name ?>"></td>
								</tr>
								<tr>
									<td><label for="paswrd">Password:</label></td>
									<td><input type="password" id="paswrd" name="passwrd" value="<?php echo $password ?>"></td>
								</tr>
								<tr>
									<td><label>Gender:</label></td>
									<td>
										<input type="radio" name="gender" value="Male">M&nbsp;
										<input type="radio" name="gender" value="Female">F
									</td>
								</tr>
								<tr>
									<td><label>Date of Birth:</label></td>
									<td><input type="Date" name="dob" value="<?php echo $dob ?>"></td>
								</tr>
								<tr>
									<td><label for="phone">Contact:</label></td>
									<td><input type="number" id="phone" name="contactNo" value="<?php echo $contact ?>"></td>
								</tr>
								<tr>
									<td><label for="addr">Address:</label></td>
									<td><input type="text" id="addr" name="address" value="<?php echo $address ?>"></td>
								</tr>
								<tr>
									<td colspan="2"><label>Marks Obtained In:</label></td>
								</tr>
								<tr>
									<td><label>Software Engineering:</label></td>
									<td><input type="number" max="100" min="0" class="num" name="se" value="<?php echo $s_engineering ?>"></td>
								</tr>
								<tr>
									<td><label>Database Management System:</label></td>
									<td><input type="number" max="100" min="0" class="num" name="dbms" value="<?php echo $dbms ?>"></td>
								</tr>
								<tr>
									<td><label>Operating System:</label></td>
									<td><input type="number" max="100" min="0" class="num" name="os" value="<?php echo $o_system ?>"></td>
								</tr>
								<tr>
									<td><label>Numerical Method:</label></td>
									<td><input type="number" max="100" min="0" class="num" name="nm" value="<?php echo $n_method ?>"></td>
								</tr>
								<tr>
									<td><label>Scripting Language:</label></td>
									<td><input type="number" max="100" min="0" class="num" name="sl" value="<?php echo $s_language ?>"></td>
								</tr>
								<tr>
									<td><input type="submit" name="submit"></td>
									<td><input type="reset" name="reset"></td>
								</tr>
							</table>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>