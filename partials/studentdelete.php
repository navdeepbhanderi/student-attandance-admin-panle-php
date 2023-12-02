<?php
        include("dbcon.php");
        if(isset($_GET['key'])){
       echo $key = $_GET["key"];
        
        $sql = mysqli_query($con,"delete from student where eid ='$key'");

        if($sql){
            session_start();
          echo  $_SESSION['status'] = 'Student deleted successfully';
            $_SESSION['status_code'] = "success";
            header("location:../addstudent.php");
        }
       else{ session_start();
          echo  $_SESSION['status'] = 'Please try again';
            $_SESSION['status_code'] = "error";
            header("location:../addstudent.php");
       }
    }
    else{
       echo $_SESSION['status'] = 'You could not access this page.';
            $_SESSION['status_code'] = "error";
            header("location:../addstudent.php");
    }
?>