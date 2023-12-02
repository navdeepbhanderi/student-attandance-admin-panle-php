<?php
date_default_timezone_set('Asia/Kolkata');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/input.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
  </style>
</head>

<body style="font-family:'Inter', sans-serif; ">
  <nav class="w-full bg-gray-100 h-24">
    <div class="nav flex w-full items-center h-full">
      <div class="logo w-[19rem] flex px-10 items-center h-full">
        <i id="hamburger" class="cursor-pointer fa-solid fa-bars p-2 bg-white rounded-md mr-3"></i>
        <!-- <img class="w-32" src="img/admin-logo.svg" alt=""> -->
        <p class="w-32 text-2xl font-semibold">ADMIN</p>
      </div>
      <div class="navbar2 h-full w-full pr-10 flex items-center justify-between">
        <div class="search flex relative">
          <i class="absolute text-sm top-4 left-4  fa-solid  fa-magnifying-glass text-gray-400"></i>
          <input class="rounded-md w-80 text-sm outline-none p-3 pl-10 text-gray-400" placeholder="Search..."
            type="search" name="" id="">
            <?php
            
              if($_SERVER['REQUEST_URI'] == '/project/dashboard.php'){
                  echo '<button type="button"  data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="ml-4 p-2 px-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-md text-white cursor-pointer">Add new Department</button>

                  <button type="button"  data-modal-target="authentication-modal2" data-modal-toggle="authentication-modal2" class="ml-4 p-2 px-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-md text-white cursor-pointer">Add new branch</button>';
              }
            ?>
            
            
        </div>
        <div class="others flex items-center">
        <div class="flex mr-4 items-center">
        <span class="relative flex h-3 w-3 mr-3">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
        </span>  
        
        <p id="clock" class="mr-3"></p>
        <p id="day"></p></div>
          <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
            class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 " type="button">
            <span class="sr-only">Open user menu</span>
            <img id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="w-8 h-8 rounded-full"
              src="img/user.webp" alt="user photo">
          </button>
          <!-- Dropdown menu -->
          <div id="dropdownAvatar" style="transform: translate(1320px, 80px);"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow  dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
              <div>
                <?php echo ucfirst($_SESSION['name']); ?>
              </div>
              <div style="font-size:12px;" class="font-sm  truncate">
                <?php echo $_SESSION['email']; ?>
              </div>
            </div>
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
              <li>
                <a href="dashboard.php"
                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
              </li>
              <li>
                <a href="#"
                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
              </li>
            </ul>
            <div class="py-2">
              <a href="partials/logout.php"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                out</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  </div>


  <!-- Main modal -->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <script src="https://kit.fontawesome.com/56705d3fd7.js" crossorigin="anonymous"></script>
</body>

</html>

<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add New Department</h3>
                <form class="space-y-6" action="partials/code.php" method="post">
                    <div>
                        <label for="dept" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                        <input type="text" name="dept" id="dept" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                   
                    <button type="submit" name="deptt" class="w-full p-3 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-md text-white cursor-pointer">Add New Department</button>
                    
                </form>
            </div>
        </div>
    </div>
</div> 




<div id="authentication-modal2" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal2">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add New Branch</h3>
                <form class="space-y-6" action="partials/code2.php" method="post">
                    <div>
                      <label for="default" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Please Select a Department</label>
                      <select name="dept" id="default" class="outline-none bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a Department</option>
                        <?php
                            include 'partials/dbcon.php';
                            $sql = mysqli_query($con,"select * from dept;");
                            while($row = mysqli_fetch_assoc($sql)){
                             echo '<option value="'.$row['dname'].'">'. ucfirst($row['dname']).'</option>';
                            }
                         ?>
                      </select>
                    </div>
                    <div>
                        <label for="branch" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Branch</label>
                        <input type="text" name="branchs" id="branch" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                   
                    <button type="submit" name="branch" class="w-full p-3 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-md text-white cursor-pointer">Add New Branch</button>
                    
                </form>
            </div>
        </div>
    </div>
</div> 

<script>
    function updateClock() {
      var now = new Date();
      var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
      var dayOfWeek = daysOfWeek[now.getDay()];
      var date = now.getDate();
      var month = now.getMonth() + 1; // Months are zero-based in JavaScript
      var year = now.getFullYear();
      var hours = now.getHours();
      var minutes = now.getMinutes();
      var seconds = now.getSeconds();
      
      // Format hours, minutes, and seconds to have leading zeros if they are less than 10
      hours = hours < 10 ? "0" + hours : hours;
      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;
      
      // Display the formatted date, day of the week, and time on the webpage
      document.getElementById("day").textContent = dayOfWeek + ", " + date + "/" + month + "/" + year;
      document.getElementById("clock").textContent = hours + ":" + minutes + ":" + seconds;
    }
    
    // Update the clock and date every second (1000 milliseconds)
    setInterval(updateClock, 1000);
    
    // Call the function once to display the initial time and date
    updateClock();
  </script>