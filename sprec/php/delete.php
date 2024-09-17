<?php
    include "connection.php";
    session_start();
    if(isset($_SESSION['user'])){
		// sleep(2);
        $delid = $_GET['ID'];        
        $del_Att_Query = "delete from attendance where ID='$delid'";
        $del_Att_Exe = mysqli_query($conn,$del_Att_Query);

        $del_Query = "delete from std_info where ID='$delid'";
        $del_Exe = mysqli_query($conn,$del_Query);
        if($del_Exe && $del_Att_Exe){
            sleep(2);
            echo "<script>window.alert('Record has been deleted.');
					window.location.href='manageStd.php';</script>";
        }else{
            echo "failed";
        }
	}else{
		echo "<script>window.alert('Redirecting...');
                window.location.href='login.php';</script>";
            session_destroy();
	}
    
?>
