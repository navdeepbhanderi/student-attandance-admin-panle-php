<?php
    session_start();
    if(isset($_SESSION['ano'])){
        header('location:index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
      </style>
</head>
<script src="js/sweetalert.min.js"></script>
<?php
    if(isset($_SESSION['status']) && isset($_SESSION['status_code'])){
        echo '<p style="display:none;">e</p>';
        echo '
        <script>
        swal({
        title: "'.$_SESSION['status_code'].'",
        text: "'.$_SESSION['status'].'",
        icon: "'.$_SESSION['status_code'].'",
        }).catch(swal.noop);
       </script>';
       unset($_SESSION['status']);
       unset($_SESSION['status_code']);
      
    }
           
?>
<body style="font-family:'Inter' sans-serif; background-image: url('img/bg-admin.jpeg');" class=" flex bg-cover bg-no-repeat w-[100%]">
    <div class="part1 max-lg:hidden  w-[55%] flex flex-col justify-center items-center h-[44.5rem] p-10">
            <img width="300px" src="img/agency.png" alt="">
            <div class="px-32 mt-14">
            <p class="text-center mb-4 font-bold text-3xl">Admin Panel</p>
            <p class="text-center text-sm text-gray-500">Manage all student attandance by admin panel</p>
            </div>
    </div>
    <div class="part2 max-lg:w-2/3 max-lg:m-auto max-lg:p-30 w-[45%] h-[44.5rem] flex flex-col p-10 ">
        <div class="box flex flex-col items-center justify-center p-10 lg:px-10 xl:px-20 px-24 rounded-3xl bg-white w-full h-full">
 <p class="font-bold text-xl text-center mb-2">Forgot Password ?</p>
            <p class="font-light text-sm text-center text-gray-400">Enter your email to reset your password.</p>  
            <form onsubmit="return validateform2()" class="w-full" action="partials/handleforgotpass.php" method="post">
            <div id="emailfield" class="inputfield w-full my-7">
                <input class="w-full p-2 px-3 outline-none text-base border border-gray-200 rounded-lg active:border-gray-300 focus:border-gray-300 transition-all"  placeholder="Email" type="email" name="email" id="email">
                <p class="formerror text-xs text-red-600"></p>
            </div>

           
            <div class="btn text-center w-full space-x-2">
                <input class="p-2 px-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-md text-white cursor-pointer" type="submit" name="forgot_pass" value="Send Link">
                <a href="index.php" class="p-2.5 px-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-md text-white cursor-pointer">Back</a>
            </div>
            </form>

        </div>
    </div>
    <script src="js/validation.js">
    </script>
</body>
</html>