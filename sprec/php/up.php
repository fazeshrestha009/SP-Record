<?php
    include "connection.php";
    if(isset($_POST['submit'])){
		if (empty($_POST['sid'])||empty($_POST['firstName'])||empty($_POST['lastName'])||empty($_POST['passwrd'])||empty($_POST['gender'])||empty($_POST['dob'])||empty($_POST['contactNo'])||empty($_POST['address'])||empty($_POST['se'])||empty($_POST['dbms'])||empty($_POST['os'])||empty($_POST['nm'])||empty($_POST['sl'])) {
            // sleep(1);
            echo "<script>window.alert('Please Input all details.');
                    window.location.href='manageStd.php';</script>";
		}else{
            $std_id=$_POST['sid'];
            $f_name = $_POST['firstName'];
            $l_name = $_POST['lastName'];
            $password = $_POST['passwrd'];
            $gen = $_POST['gender'];
            $date = $_POST['dob'];
            $phone = $_POST['contactNo'];
            $addr = $_POST['address'];
            $s_engineering = $_POST['se'];
            $db_ms = $_POST['dbms'];
            $o_system = $_POST['os'];
            $n_method = $_POST['nm'];
            $s_language = $_POST['sl'];

            $upd_Query = "update std_info set ID='$std_id',F_name='$f_name',L_name='$l_name',Pasword='$password',Gender='$gen',
                DOB='$date',Contact='$phone',Address='$addr',S_engineering='$s_engineering',DBMS='$db_ms',O_system='$o_system',
                N_method='$n_method',S_language='$s_language' where ID='$std_id'";
            $upd_Exe = mysqli_query($conn,$upd_Query);
            if($upd_Exe){
                sleep(2);
                echo "<script>window.alert('Update Successful.');
		    			window.location.href='manageStd.php';</script>";
            }else{
                sleep(2);
                echo "<script>window.alert('Id or contact already exist.');
		        		window.location.href='manageStd.php';</script>";
            }
        }
    }else{
        sleep(3);
        echo "<script>window.location.href='manageStd.php';</script>";
    }
?>