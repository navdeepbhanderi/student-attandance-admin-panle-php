<?php
        include("dbcon.php");
        if(isset($_GET['key'])){
          $branch = $_GET['branch'];
            $key = $_GET['key'];
        $sql = mysqli_query($con,"DELETE FROM `faculty_role` WHERE `id` ='$key'");

        if($sql){
            session_start();
          echo  $_SESSION['status'] = 'Faculty Role deleted successfully';
            $_SESSION['status_code'] = "success";
            header("location:../facultyshow.php?branch=".$branch."");
        }
       else{ session_start();
          echo  $_SESSION['status'] = 'Please try again';
            $_SESSION['status_code'] = "error";
            header("location:../facultyshow.php?branch=".$branch."");
       }
    }
    else{
       echo $_SESSION['status'] = 'You could not access this page.';
            $_SESSION['status_code'] = "error";
            header("location:../addstudent.php");
    }
?>