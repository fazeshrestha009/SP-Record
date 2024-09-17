<!DOCTYPE html>
<html lang="en">
<head>
    <title>SP Record: Attendance Details</title>
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="../css/viewStyle.css">

    <script defer src="../javaScript/sessDestroy.js "></script>
	<script defer src="../javaScript/date.js "></script>
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
            <h1>Attendance Record</h1>
            <div class="box">
                <?php
                    include "connection.php";
                    session_start();

                    $std_id = (trim($_GET['ID']))?trim($_GET['ID']):false;
                    $att_Query = "SELECT * FROM attendance WHERE ID='$std_id'";
                    $exe_query = mysqli_query($conn,$att_Query);
                    $total = mysqli_num_rows($exe_query);
                    if($total == 0){
                        echo "<script>window.alert('No record Found!');
                                window.location.href='stdAttendance.php';</script>";
                    }

                    if (isset($_SESSION['user'])) {
                        //$std_id = (trim($_GET['ID']))?trim($_GET['ID']):false;

                        $query = "SELECT std_info.F_name, std_info.L_name, attendance.dates, attendance.std_status
                                FROM attendance
                                INNER JOIN std_info ON attendance.ID = std_info.ID WHERE std_info.ID = '$std_id'
                                ORDER BY attendance.dates DESC";
                        $result = mysqli_query($conn, $query);

                        if ($result) {
                            $totalPresent = 0;
                            $totalAbsent = 0;
                            if (mysqli_num_rows($result) > 0) {
                                echo "<table>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>";
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>
                                                <td>" . $row['F_name'] . " " . $row['L_name'] . "</td>
                                                <td>" . $row['dates'] . "</td>
                                                <td>" . $row['std_status'] . "</td>
                                            </tr>";
                                        if($row['std_status'] == 'Present'){
                                            $totalPresent++;
                                        }elseif($row['std_status'] == 'Absent'){
                                            $totalAbsent++;
                                        }
                                    }
                                echo "</table>";
                            } else {
                                echo "No attendance records found.";
                            }
                        } else {
                            echo "Error" . mysqli_error($conn);
                        }
                    } else {
                        echo "<script>window.alert('Redirecting...');
                                    window.location.href='login.php';</script>";
                        session_destroy();
                    }
                ?> 
            </div>    
            <div class="para">
                <?php
                    echo "<p>Total no of days Present: $totalPresent</p>
                    <p>Total no of days Absent: $totalAbsent</p>";
                ?>
            </div>
        </div>
</body>
</html>