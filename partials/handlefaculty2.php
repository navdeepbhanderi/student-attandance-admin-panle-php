<?php
    if(isset($_POST['faculty'])){
        include 'dbcon.php';
        $branch = $_POST['branch'];
        $fname = strtoupper($_POST["fname"]);
        $number = $_POST["number"]; 
        $email = $_POST["email"]; 
        $password = $_POST["pass"]; 

        if(isset($_FILES['image']['name']))
        {
                $image_name = $_FILES['image']['name'];
            if($image_name!="")
            {
                 $ext = end(explode('.',$image_name));

                 $image_name = "Faculty".$pname.rand(0000,9999).'.'.$ext;//e.g service_category_834.jpg
                
                  $src = $_FILES['image']['tmp_name'];

                  $dst = "../facultyimg/".$image_name;

                //finally upload the image 
                 $upload = move_uploaded_file($src, $dst);
       
            }
        } else {
            $image_name = ""; //setting deafult value as a blank
        }
        echo $image_name;

        $sendData = mysqli_query($con,"INSERT INTO `faculty`(`img`,`fname`, `email`, `password`, `number`) VALUES ('$image_name','$fname','$email','$password','$number');");
        if($sendData){
            session_start();
            $_SESSION['status'] = 'New Faculty added successfully';
            $_SESSION['status_code'] = "success";
            header("location:../facultyshow.php?branch=".$branch."");
        }
    }else{
        session_start();
        $_SESSION['status'] = 'You could not access this page';
        $_SESSION['status_code'] = "error";
       header("location:../index.php");
    }
?>