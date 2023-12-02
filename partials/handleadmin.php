<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>
<?php

    if(isset($_POST['admin_login'])){
        $login = false;
        $showError = false;
        include 'dbcon.php';
        $email = $_POST["email"];
        $password = $_POST["password"]; 
        
        $sql = "Select * from admin where email='$email'";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        

        if ($num == 1){
            while($row=mysqli_fetch_assoc($result))
            {
                if ($password == $row['password'])
                // if(password_verify($password, $row['password']))
                { 
                    session_start();
                    $login = true;  
                    $_SESSION['loggedin'] = true;
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['ano'] = $row['id'];
                    if(isset($_SESSION['ano'])){
                    $_SESSION['status'] = 'You are Succesfully logged in';
                    $_SESSION['status_code'] = "success";
                    header("location:../dashboard.php");
                    }
                } 
                else{
                    session_start();
                    $_SESSION['status'] = 'Your password is incorrect';
                    $_SESSION['status_code'] = "error";
                    header("location:../index.php");
                }
            }
        } 
        else{
            session_start();
            $_SESSION['status'] = 'Please register first';
            $_SESSION['status_code'] = "error";
            header("location:../index.php");
        }
    }
    else{
        session_start();
        $_SESSION['status'] = 'You could not access this page';
        $_SESSION['status_code'] = "error";
        header("location:../index.php");
    }
?>