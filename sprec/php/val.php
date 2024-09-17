<?php 
	include "connection.php";
	if(isset($_POST['submit'])){
		if (empty($_POST['sid'])||empty($_POST['firstName'])||empty($_POST['lastName'])||empty($_POST['passwrd'])||empty($_POST['gender'])||empty($_POST['dob'])||empty($_POST['contactNo'])||empty($_POST['address'])||empty($_POST['se'])||empty($_POST['dbms'])||empty($_POST['os'])||empty($_POST['nm'])||empty($_POST['sl'])) {
			sleep(2);
			echo "<script>window.alert('Please fill all the details!!');
				window.location.href='addStd.php';</script>";
		}else{
			$id = $_POST['sid'];
			$f_name = $_POST['firstName'];
			$l_name = $_POST['lastName'];
			$password = $_POST['passwrd'];
			$gender = $_POST['gender'];
			$Dob = $_POST['dob'];
			$contact = $_POST['contactNo'];
			$address = $_POST['address'];
			$s_engineering = $_POST['se'];
			$Dbms = $_POST['dbms'];
			$o_system = $_POST['os'];
			$n_method = $_POST['nm'];
			$s_language = $_POST['sl'];
			$ins_query = "insert into std_info values ('$id','$f_name','$l_name','$password','$gender','$Dob','$contact','$address','$s_engineering','$Dbms','$o_system','$n_method','$s_language')";
			$ins_exe = mysqli_query($conn,$ins_query);
			if ($ins_exe){
				sleep(1);
				echo "<script>window.alert('Data inserted');
					window.location.href='stdAttendance.php';</script>";
			}else{
				sleep(2);
				echo "<script>window.alert('Id or contact already exists');
					window.location.href='addstd.php';</script>";
			}
		}
		}else{
			sleep(2);
			header("location:adminHome.php");
		}
?>