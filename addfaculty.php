<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">
<style>
            * {
            box-sizing: border-box;
            }

            body {
            font: 16px Arial;  
            }

            /*the container must be positioned relative:*/
            .autocomplete {
            position: relative;
            display: inline-block;
            }

            .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
            }

            .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff; 
            border-bottom: 1px solid #d4d4d4; 
            }

            /*when hovering an item:*/
            .autocomplete-items div:hover {
            background-color: #e9e9e9; 
            }

            /*when navigating through the items using the arrow keys:*/
            .autocomplete-active {
            background-color: DodgerBlue !important; 
            color: #ffffff; 
            }
</style>
</head>

<body>
    <script src="js/sweetalert.min.js"></script>
    <nav>
        <?php ob_start();  include 'partials/navbar.php'; ?>
    </nav>

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
    <div class="screen flex w-full h-full bg-gray-600">
        <div class="part1 w-full">
            <?php  include 'partials/sidebar.php'; ?>
            <div class="content w-full  overflow-y-auto bg-white p-6 rounded-l-lg">
                <!-- <div class="con w-full h-[100vh] "> -->

                    <div class="flex">
                        <button type=" button" data-modal-target="staticModal" data-modal-toggle="staticModal"
                        class="mb-4 mr-4 p-3 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-md text-white cursor-pointer">Add New Faculty</button>
              </div>
        <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Add a New Faculty
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="staticModal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <!-- Modal body -->
            
                                <form action="partials/handlefaculty.php" method="post" enctype="multipart/form-data">
                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
            
                                        <div>
                                            <label for="first_name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full
                                                name</label>
                                            <input type="text" id="first_name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none"
                                                required placeholder="Full Name" name="fname">
                                        </div>
                                        <div>
                                            <label for="number"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                                Number</label>
                                            <input type="text" id="number"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none"
                                                maxlength="10" placeholder="Phone number" name="number" required>
                                        </div>
                                        <div>
                                            <label for="email"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                                                address</label>
                                            <input type="email" id="email"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none"
                                                required placeholder="Email address" name="email">
                                        </div>
                                        <div>
                                            <label for="password"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                            <input type="password" id="password" placeholder="Password"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none"
                                                name="pass" required>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div>
                                             
                                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Image</label>
                                                <input class="block w-full text-sm p-2 text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none" aria-describedby="file_input_help" id="file_input" type="file" required name = "image">
                                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>

                                        </div>
                                    </div>
            
            
            
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                                <input style="background:blue;" name="faculty" type="submit"
                                    class="text-white bg-blue-700 cursor-pointer hover:bg-blue-800   font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                    value="Add a new Faculty" name="facuty"/>
                                </form>
            
                                <button data-modal-hide="staticModal" type="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                            </div>
                        </div>
                    </div>
                </div>
                  

  <table id="myTable" class="table display">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Date</th>
      <th scope="col">Show Role</th>
    </tr>
  </thead>
  <tbody>
   
    <?php
        include 'partials/dbcon.php';
        $result = mysqli_query($con,"select * from faculty");
        $names=[];
        $i=1;
        while($row = mysqli_fetch_assoc($result)){ 
            if (isset($row['fname'])) {
                $names[] = $row['fname'];
            }
            $fid = $row['fid'];
                echo "<tr>";    
                echo "<td>".$i++."</td>";
                echo "<td><img data-modal-target='crypto-modals".$fid."' data-modal-toggle='crypto-modals".$fid."' class='rounded-full w-10 cursor-pointer' src='facultyimg/".$row['img']."' alt='img'></td>";
                echo "<td>".$row['fname']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['number']."</td>";
                echo "<td>".$row['date']."</td>";
                echo "<td><input data-modal-target='crypto-modal".$fid."' data-modal-toggle='crypto-modal".$fid."'  style='background:blue;' type='button'
                class='text-white bg-blue-700 cursor-pointer hover:bg-blue-800   font-medium rounded-lg text-sm px-5 py-2.5 text-center'
               name='facultyrole' value='Show Role'/></td>";
                echo "</tr>";


                ?>
                <!-- show image of faculty -->
              <div id="crypto-modals<?php echo $fid; ?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="crypto-modals<?php echo $fid; ?>">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <!-- Modal header -->
                        <div class="px-6 py-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
                                Image of <?php echo $row['fname']; ?> </h3>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6">
                           <?php
                           echo "<img class='rounded-full w-30 cursor-pointer' src='facultyimg/".$row['img']."' alt='img'>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>





                    <div id="popup-modal<?php echo $key; ?>" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal<?php echo $key; ?>">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-6 text-center">
                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this student?</h3>
                                    <a href="partials/studentdelete.php?key=<?php echo $key; ?>" style="background:rgb(239,68,68);" data-modal-hide="popup-modal<?php echo $key; ?>" type="button" class="text-white hover:bg-red-500 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Yes, I'm sure
                                    </a>
                                    <button data-modal-hide="popup-modal<?php echo $key; ?>" type="button" class="text-gray-500 bg-white hover:bg-gray-100  rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 ">No, cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>



                <!-- show role modal -->
                <div id="crypto-modal<?php echo $fid; ?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="crypto-modal<?php echo $fid; ?>">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <!-- Modal header -->
                            <div class="px-6 py-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
                                    Role of <?php echo $row['fname']; ?> </h3>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6">
                                <?php
                                    $sqll = mysqli_query($con,"select * from `faculty_role` where `fid`='$fid'");
                                    $i = 1;
                                    $count = mysqli_num_rows($sqll);
                                if($count>0){
                                    while($row = mysqli_fetch_assoc($sqll)){
                                        $bid = $row['bid'];
                                        $sqlll = mysqli_query($con,"SELECT `did`, `bname` FROM `branch` WHERE `bid` in (SELECT `bid` FROM `faculty_role` WHERE `bid` = '$bid');");
                                        while($www = mysqli_fetch_assoc($sqlll)){
                                            $branches = $www['bname'];
                                            $departmentId = $www['did'];
                                        }

                                        $sqlll = mysqli_query($con,"SELECT `dname` FROM `dept` WHERE `did` IN (SELECT `did`FROM `branch`WHERE `did` = '$departmentId' );");
                                        while($www2 = mysqli_fetch_assoc($sqlll)){
                                            $department = $www2['dname'];
                                        }

                                        echo "Role".$i."</br>";
                                        echo "&nbsp;&nbsp; Subject : ".$row['subject']."</br>";
                                        echo "&nbsp;&nbsp; Department : ".strtoupper($department)."</br>";
                                        echo "&nbsp;&nbsp; Branch : ".strtoupper($branches)."</br>";
                                        echo "&nbsp;&nbsp; Semester : ".$row['sem']."</br>";
                                        echo "<div class='mb-4'></div>";
                                        $i++;
                                    }
                                }
                                else{
                                    echo "No role assigned to ".$row['fname']."";
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>


                <?php 


            }
                ?>
            
          
            </div>
        </div>
    </div>
            <script>
                var passedArray = <?php echo json_encode($names); ?>;
            </script>
    <script src="js/ham.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script src="https://kit.fontawesome.com/56705d3fd7.js" crossorigin="anonymous"></script>
    <script src="js/ham.js"> </script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script src="js/dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>


</body>

</html>






