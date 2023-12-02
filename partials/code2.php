
<?php
    if(isset($_POST['branch'])){
        include 'dbcon.php';
        $dept = $_POST['dept'];
        $sql = mysqli_query($con,"select * from dept where `dname` = '$dept';");
        while($row = mysqli_fetch_assoc($sql)){
            $did = $row['did'];
        }

        $branch = strtolower($_POST['branchs']);
        $sqll = "select * from `branch` where `bname` = '$branch' AND `did` = '$did'";
        $sql = mysqli_query($con,$sqll);
        $count = mysqli_num_rows($sql);
        
        if($count>=1){
            session_start();
            $_SESSION['status'] = "Already this branch added";    
            $_SESSION['status_code'] = "error";
            header('location:../branches.php');
        }
        else{
            session_start();
            $sql = mysqli_query($con,"INSERT INTO `branch`(`did`, `bname`) VALUES ('$did','$branch') ");
            $_SESSION['status'] = "New Department Added Successfully";    
            $_SESSION['status_code'] = "success";
            header('location:../branches.php');
        }
    }

?>
