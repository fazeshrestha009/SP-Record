<?php
    include "connection.php";
    session_start();
    if(isset($_SESSION['user'])){
        // sleep(3);
        $uname = $_SESSION['user'];

        $query = "select * from std_info where ID = '$uname'";
        $Exe_query = mysqli_query($conn,$query);
        if($Exe_query){
            while($rows = mysqli_fetch_assoc($Exe_query)){
                $f_name = $rows['F_name'];
                $l_name = $rows['L_name'];
                $gender = $rows['Gender'];
                $dob = $rows['DOB'];
                $contact = $rows['Contact'];
                $address = $rows['Address'];
                $s_engineering = $rows['S_engineering'];
                $dbms = $rows['DBMS'];
                $o_system = $rows['O_system'];
                $n_method = $rows['N_method'];
                $s_language = $rows['S_language'];
            }
        }
    }else{
		echo "<script>window.alert('Redirecting...');
                window.location.href='login.php';</script>";
			session_destroy();
	}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SP Record</title>
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="../css/viewStyle.css">

    <script defer src="../javaScript/date.js "></script>
    <script defer src="../javaScript/sessDestroy.js"></script>
</head>
<body>
    <div class="dash">
        <div class="space"></div>
		<ul class="menu">
            <li><h2>Dashboard</h2></li>
            <li><h3><a href="stdHome.php">Home</a></h3></li>
            <?php echo "<li><h3><a href='changePsw.php'>Change password</a></h3></li>" ?>
            <?php echo "<li><h3><a href='stdAttenDisp.php?ID=$uname'>Attendance Detail</a></h3></li>"?>
        </ul>
    </div>
    <div class="container">
        <div class="head">
            <h2><a href="stdHome.php">SP Record</a></h2>
            <p>Welcome Student</p>
            <div id="date">
				<div id="currentDate"></div>
				<div class="day"></div>
			</div>
			<div class="inp">
				<input type="button" name="logout" onclick="return logout()" value="Logout">
			</div>
        </div>
        <div class="main">
            <h1><?php echo $f_name . " " . $l_name . "'s Information" ?></h1>
            <div class="box">
                <table>
                    <tr>
                        <th>Student ID:</th>
                        <td><?php echo $uname ?></td>
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
                </table>
            </div>
        </div>
    </div>
</body>
</html>