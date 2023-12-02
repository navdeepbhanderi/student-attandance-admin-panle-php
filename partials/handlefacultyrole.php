<?php
    if(isset($_POST['facultyrole'])){
        include 'dbcon.php';
        $fname = $_POST["fname"];
        $bid = $_POST["branch"]; 
        $sem = $_POST["sem"]; 
        $subject = $_POST["subject"];  

        $sql = mysqli_query($con,"select * from faculty where fname='$fname'");
        $row = mysqli_fetch_assoc($sql);
        echo    $fid = $row['fid'];
        echo $name = $row['fname'];
        
        $sendData = mysqli_query($con,"INSERT INTO `faculty_role`(`fid`,`bid`,`subject`, `sem`) VALUES ('$fid','$bid','$subject','$sem');");
        echo mysqli_error($con);
        if($sendData){
            session_start();
            $_SESSION['status'] = 'New role assigned successfully'; 
            $_SESSION['status_code'] = "success";
            header("location:../facultyshow.php?branch=".$bid."");
        }

    }else{
        session_start();
        $_SESSION['status'] = 'You could not access this page';
        $_SESSION['status_code'] = "error";
        header("location:../index.php");
    }
?>