<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $std_id = $_POST['sid'];
        $date = $_POST['date'];
        $stats = $_POST['status'];
        $flag = 0;

        $attend_Val = "SELECT * FROM attendance WHERE ID = '$std_id' AND dates = '$date'";
        $attend_Val_Exe = mysqli_query($conn,$attend_Val);

        if(mysqli_num_rows($attend_Val_Exe) > 0){
            $flag = 1;
            echo "<script>window.alert('Date already registered');
                window.location.href='stdAttendance.php';</script>";  
        }

        if($flag == 0){
            $attend_Query = "INSERT INTO attendance (ID, dates, std_status) VALUES ('$std_id','$date','$stats')";
            $attend_Query_Exe = mysqli_query($conn,$attend_Query);

            if($attend_Query_Exe){
                echo "<script>window.alert('Attendance marked successfully');
                    window.location.href='stdAttendance.php';</script>";   
            }else{
                echo "<script>window.alert('Invalid Id');
                    window.location.href='stdAttendance.php';</script>";
            }
        }
    }
?>