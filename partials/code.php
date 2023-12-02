
<?php
    if(isset($_POST['deptt'])){
        include 'dbcon.php';
        $dept = strtolower($_POST['dept']);
        $sql = mysqli_query($con,"select * from `dept` where `dname`='$dept';");
        $count = mysqli_num_rows($sql);
        
        if($count>=1){
            session_start();
            $_SESSION['status'] = "Already this department added";    
            $_SESSION['status_code'] = "error";
            header('location:../dashboard.php');
        }
        else{
            session_start();
            $sql = mysqli_query($con,"INSERT INTO `dept`(`dname`) VALUES ('$dept')");
            $_SESSION['status'] = "New Department Added Successfully";    
            $_SESSION['status_code'] = "success";
            header('location:../dashboard.php');
        }
    }

?>

