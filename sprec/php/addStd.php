<?php
	session_start();
	if(isset($_SESSION['user'])){
		sleep(1);
	}else{
		echo "<script>window.alert('Redirecting...');
                window.location.href='login.php';</script>";
				session_destroy();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SP Record: Add detail</title>
	<link rel="stylesheet" type="text/css" href="../css/header.css">
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
			<h1>Add student details</h1>
			<div class="box">
				<form method="POST" action="val.php" onsubmit="return validateForm()">
					<fieldset>
						<legend>Student Information</legend>
							<table>
								<tr>
									<td><label for="stdid">Student ID:</label></td>
									<td><input type="text" id="stdid" name="sid"></td>
								</tr>
								<tr>
									<td><label for="firstN">First Name:</label></td>
									<td><input type="text" id="firstN" name="firstName"></td>
								</tr>
								<tr>
									<td><label for="lastN">Last Name:</label></td>
									<td><input type="text" id="lastN" name="lastName"></td>
								</tr>
								<tr>
									<td><label for="paswrd">Password:</label></td>
									<td><input type="password" id="paswrd" name="passwrd"></td>
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
									<td><input type="Date" name="dob"></td>
								</tr>
								<tr>
									<td><label for="phone">Contact:</label></td>
									<td><input type="number" id="phone" name="contactNo"></td>
								</tr>
								<tr>
									<td><label for="addr">Address:</label></td>
									<td><input type="text" id="addr" name="address"></td>
								</tr>
								<tr>
									<td colspan="2"><label>Marks Obtained In:</label></td>
								</tr>
								<tr>
									<td><label>Software Engineering:</label></td>
									<td><input type="number" max="100" min="0" class="num" name="se"></td>
								</tr>
								<tr>
									<td><label>Database Management System:</label></td>
									<td><input type="number" max="100" min="0" class="num" name="dbms"></td>
								</tr>
								<tr>
									<td><label>Operating System:</label></td>
									<td><input type="number" max="100" min="0" class="num" name="os"></td>
								</tr>
								<tr>
									<td><label>Numerical Method:</label></td>
									<td><input type="number" max="100" min="0" class="num" name="nm"></td>
								</tr>
								<tr>
									<td><label>Scripting Language:</label></td>
									<td><input type="number" max="100" min="0" class="num" name="sl"></td>
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