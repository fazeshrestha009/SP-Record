<?php
	session_start();
	if(isset($_SESSION['user'])){
		// sleep(1);
	}else{
		echo "<script>window.alert('Redirecting...');
                window.location.href='login.php';</script>";
				session_destroy();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SP Record: Attendance</title>
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="../css/formStyle.css">
	<script defer src="../javaScript/sessDestroy.js "></script>
	<script defer src="../javaScript/date.js "></script>
	<style>
		*{
			overflow: hidden;
		}
		.container{
			height: 100vh;
		}
		.main{
			margin-top: 8%;
		}
	</style>
</head>
<body>
	<div class="dash">		
		<div class="space"></div>
		<ul class="menu">
			<li><h2>Dashboard</h2></li>
			<li><h3><a href="adminHome.php">Home</a></h3></li>
			<li><h3><a href="manageStd.php">Manage student</a></h3></li>
			<li><h3><a href="addStd.php">Add student</a></h3></li>
			<li><h3><a href="changePsw.php">Change password</a></h3></li>
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
			<h1>Attendance details</h1>
			<div class="box">
				<form method="POST" action="attendanceVal.php">
					<fieldset>
						<legend>Attendance</legend>
							<table>
								<tr>
									<td><label for="stdid">Student ID:</label></td>
									<td><input type="text" id="stdid" name="sid"></td>
								</tr>
									<td><label>Date:</label></td>
									<td><input type="Date" name="date"></td>
								</tr>
								<tr>
									<td><label for="stat">Attendance Status:</label></td>
									<td>
                                        <select name="status" >
                                            <option value="Present">Present</option>
                                            <option value="Absent">Absent</option>
                                        </select>
                                    </td>
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