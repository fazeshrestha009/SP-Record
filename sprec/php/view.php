<?php
    session_start();
	if(isset($_SESSION['user'])){
		sleep(2);
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
<html lang="en">
<head>
    <title>SP Record: View detail</title>
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="../css/viewStyle.css">
    
    <script defer src="../javaScript/sessDestroy.js "></script>
	<script defer src="../javaScript/date.js "></script>
    <script defer src="../javaScript/delScript.js "></script>
</head>
<body>
<body>
    <div class="dash">
		<div class="space"></div>
		<ul class="menu">
            <li><h2>Dashboard</h2></li>
            <li><h3><a href="adminHome.php">Home</a></h3></li>
            <li><h3><a href="manageStd.php">Manage student</a></h3></li>
            <li><h3><a href="addStd.php">Add student</a></h3></li>
            <li><h3><a href="changePsw.php">Change password</a></h3></li>
            <?php echo "<li><h3><a href='attendanceDisplay.php?ID=$std_id'>Attendance Detail</a></h3></li>"?>
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
            <h1>Student Record</h1>
			<div class="box">
                <table>
                    <tr>
                        <th>Student ID:</th>
                        <td><?php echo $std_id ?></td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td><?php echo $f_name ." ". $l_name ?></td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td><?php echo $gender ?></td>
                    </tr>
                    <tr>
                        <th>Date of Birth:</th>
                        <td><?php echo $dob ?></td>
                    </tr>
                    <tr>
                        <th>Contact:</th>
                        <td><?php echo $contact ?></td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td><?php echo $address ?></td>
                    </tr>
                    <tr>
                        <th>Software Engineering:</th>
                        <td><?php echo $s_engineering ?></td>
                    </tr>
                    <tr>
                        <th>Database Management System:</th>
                        <td><?php echo $dbms ?></td>
                    </tr>
                    <tr>
                        <th>Operating System:</th>
                        <td><?php echo $o_system ?></td>
                    </tr>
                    <tr>
                        <th>Numerical Method:</th>
                        <td><?php echo $n_method ?></td>
                    </tr>
                    <tr>
                        <th>Scripting Language:</th>
                        <td><?php echo $s_language ?></td>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                echo "<a href='update.php?ID=$std_id & F_name=$f_name & L_name=$l_name & Pasword=$password & Gender=$gender & DOB=$dob & Contact=$contact
                                    & Address=$address & S_engineering=$s_engineering & DBMS=$dbms & O_system=$o_system & N_method=$n_method & S_language=$s_language'><input type='button' value='Update'></a>";
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo "<a href='delete.php?ID=$std_id'><input type='button' onclick='return delConfirmation()' value='Delete'></a>";
                            ?>
                        </td>
                    </tr>
                </table>
            </div>  
        </div>
</body>
</html>