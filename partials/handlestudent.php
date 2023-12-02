<?php
    if(isset($_POST['student'])){
        include 'dbcon.php';
        $fname = $_POST["fname"];
        $eno = $_POST["eno"]; 
        $email = $_POST["email"]; 
        $password = $_POST["pass"]; 
        $number = $_POST["number"]; 
        $fnumber = $_POST["fnumber"]; 
        $dept = $_POST["dept"]; 
        $branch = $_POST["branch"]; 
        $sem = $_POST["sem"]; 

        
        $sql = "INSERT INTO `student`(`name`, `email`, `password`, `number`, `fnumber`, `dept`, `branch`, `sem`) VALUES ('$fname','$email','$password','$number','$fnumber','$dept','$branch','$sem')";
        $result = mysqli_query($con,$sql);
        if($result){
            session_start();
            $_SESSION['status'] = 'New Student added successfully';
            $_SESSION['status_code'] = "success";
            header("location:../addstudent.php");
        }
    }else{
        session_start();
        $_SESSION['status'] = 'You could not access this page';
        $_SESSION['status_code'] = "error";
        header("location:../index.php");
    }
?>