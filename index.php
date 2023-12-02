<?php
    session_start();
    if(isset($_SESSION['ano'])){
        header('location:dashboard.php');
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
    <script src="js/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/56705d3fd7.js" crossorigin="anonymous"></script>

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

<body style="font-family:'Inter', sans-serif; background-image: url('img/bg-admin.jpeg');"
    class="bg-admin-bg flex bg-cover bg-no-repeat w-[100%]">
    <div class="part1 max-lg:hidden  w-[55%] flex flex-col justify-center items-center h-[44.5rem] p-10">
        <img width="300px" src="img/agency.png" alt="">
        <!-- <img width="150px" src="img/fac.png" alt=""> -->
        <div class="px-32 mt-14">
            <p class="text-center mb-4 font-bold text-3xl">Admin Panel</p>
            <p class="text-center text-sm text-gray-500">Manage all student attandance by admin panel</p>
        </div>
    </div>
    <div class="part2 max-lg:w-2/3 max-lg:m-auto max-lg:p-30 w-[45%] h-[44.5rem] flex flex-col p-10 ">
        <div
            class="box flex flex-col items-center justify-center p-10 lg:px-10 xl:px-20 px-24 rounded-3xl bg-white w-full h-full">
            <p class="font-bold text-xl text-center mb-2">Admin Sign In</p>
            <p class="font-light text-sm text-center text-gray-400">Please sign in to Continue</p>
            <a href="#"
                class="hover:bg-gray-50 flex outline-none mt-5 justify-center p-3 px-6 rounded-lg border border-gray-200"><img
                    class="mr-3" width="18" src="img/google.svg" alt="">
                <p class="text-sm ">Sign in with Google</p>
            </a>

            <div class="mainline flex items-center my-8 w-full ">
                <div class="line  bg-gray-200 h-[1px] w-full"></div>
                <p class=" w-full text-sm text-center text-gray-400">Or with email</p>
                <div class="line  bg-gray-200 h-[1px] w-full"></div>
            </div>
            <form onsubmit="return validateform()" name="myForm" class="w-full" action="partials/handleadmin.php" method="post">
                <div id="emailfield" class=" w-full mb-4">
                    <input class="w-full p-2 px-3 outline-none text-base border border-gray-200 rounded-lg active:border-gray-300 focus:border-gray-300 transition-all"
                        placeholder="Email" type="email"  name="email" id="email">
                    <p class="formerror text-xs text-red-600"></p>
                </div>
                <div id="passfield" class=" w-full mb-3 relative">
                    <input class="w-full p-2 px-3 outline-none text-base border border-gray-200 rounded-lg active:border-gray-300 focus:border-gray-300 transition-all"
                    placeholder="Password" type="password" name="password"  id="password">
                    <i class="absolute top-3 right-4 text-gray-400 cursor-pointer fa-regular show-hide fa-eye"></i>
                    <p class="formerror text-xs text-red-600"></p>
                </div>

                <div class="btn w-full">
                    <input class="w-full p-2 my-5 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-md text-white cursor-pointer"
                        type="submit" name="admin_login" value="Login"></div>
                <div class="forgotpass flex justify-center my-2 w-full">
                    <p class="text-sm mr-2">Want to change Passeword ? </p> <a href="admin_forgotpass.php"
                        class="text-sm text-blue-500">Forgot Password</a>
                </div>
            </form>
        </div>
    </div>
    <script src="js/validation.js"></script>
    <script src="js/sweetalert.min.js"></script>
</body>

</html>