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
<body style="font-family:'Inter', sans-serif; ">
    
<div class="mainscreen flex w-full h-full  bg-gray-100">
        <div class="sidebar transition-all h-[38.7rem] bg-gray-100">
            <ul class="p-4 transition-all px-10">
                <li><a href="dashboard.php" class="text-gray-400 cursor-pointer hover:text-gray-600 flex items-center" ><i class="my-4 fa-solid mr-4  fa-home"></i><p class= "text-black w-[144px]">Dashboard</p></a></li>
                
                <li><a href="addstudent.php" class="text-gray-400 cursor-pointer hover:text-gray-600 flex items-center" ><i class="my-4 fa-solid mr-4  fa-user"></i><p class= "text-black w-[144px]">Add Student</p></a></li>
                <li><a href="addfaculty.php" class="text-gray-400 cursor-pointer hover:text-gray-600 flex items-center" ><i class="my-4 fa-solid mr-4  fa-user"></i><p class= "text-black w-[144px]">Add Faculty</p></a></li>
                <!-- <li id="list">
                    <div class="text-gray-400 cursor-pointer hover:text-gray-600 flex items-center" ><i class="my-4 fa-solid mr-4  fa-lock"></i><p class= "text-black w-[144px] flex items-center justify-between">Manage Admin <i id="down" class="fa-solid fa-caret-down"></i></p></div>
                    <ul class="hidden w-full mb-3">
                        <li class="ml-8 text-gray-400 cursor-pointer hover:text-gray-600" ><p class= "text-black w-[144px]">Dashboard</p></li>
                    </ul>
                </li> -->
                
            </ul>

        </div>
        <!-- <div class="content w-full h-[86.5vh] ov overflow-y-auto bg-white p-6 rounded-l-lg"> -->
            <!-- <div class="con w-full h-[100vh] "></div> -->
        <!-- </div> -->

    <script src="js/nav.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/56705d3fd7.js" crossorigin="anonymous"></script>
</body>
</html>