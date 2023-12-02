<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dataTables.min.css">
  
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
        <div class="part1 w-full"><?php  include 'partials/sidebar.php'; ?>
            <div class="content w-full  overflow-y-auto bg-white p-6 rounded-l-lg">
                <div class="con w-full h-full ">

                
            <button type=" button" data-modal-target="staticModal" data-modal-toggle="staticModal" class="mb-4 p-3 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-md text-white cursor-pointer">Add new student</button>

       <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Add a New Student
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

                    <form action="partials/handlestudent.php" method="post">
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="first_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full
                                    name</label>
                                <input type="text" id="first_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none"
                                    required placeholder="Full Name" name="fname" >
                            </div>
                            <div>
                                <label for="eno"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enrollment
                                    Number</label>
                                <input type="text" id="eno"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none"
                                    maxlength="10" placeholder="Enrollment number" name="eno" required>
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
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none" name="pass"
                                    required>
                            </div>
                            <div>
                                <label for="phone"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                    number</label>
                                <input type="text" id="phone" placeholder="Student Mobile Number"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none"
                                    maxlength="10"  required name="number">
                            </div>
                            <div>
                                <label for="fphone"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father phone
                                    number</label>
                                <input type="text" id="fphone" placeholder="Father's Mobile Number"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none"
                                    maxlength="10"  name="fnumber" required>
                            </div>

                            <?php
                                include 'partials/dbcon.php';
                                $sql = mysqli_query($con,"SELECT `dname`,`bname` FROM `branch` INNER JOIN `dept` ON `branch`.`did` = `dept`.`did`;");
                                $degree = [];
                                $diploma = [];
                                $pharmacy = [];
                                
                                while($data = mysqli_fetch_assoc($sql)){
                                        $department = $data["dname"];
                                        $branch = $data["bname"];
                                        // Check if the department is already in the $departments array
                                        if ($department === "degree") {
                                            $degree[] = $branch;
                                        } elseif ($department === "diploma") {
                                            $diploma[] = $branch;
                                        } elseif ($department === "pharmacy") {
                                            $pharmacy[] = $branch;
                                        }                        
                                }
                                $degree = json_encode($degree);
                                $diploma = json_encode($diploma);
                                $pharmacy = json_encode($pharmacy);
                      
                            ?>
                            <div>
                                    <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Department</label>
                                    <select id="department" name="dept" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none">
                                    <?php 
                                        $sql = mysqli_query($con,"select * from dept;");
                                            while($row = mysqli_fetch_assoc($sql)){
                                            echo "<option value='".$row['dname']."'>".ucfirst($row['dname'])."</option>";
                                            }
                                        ?>
      
                                    </select>
                            </div>
                            <div>
                                <label for="branch" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Branch</label>
                                    <select id="branchs" name="branch" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none">
                                    
                                    </select>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div>
                                <label for="sem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Semester</label>
                                    <select id="sem" name="sem" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none">
                                    <option selected>Choose a Semester</option>
                                    <option value="1st Semester">1st Semester</option>
                                    <option value="2nd Semester">2nd Semester</option>
                                    <option value="3rd Semester">3rd Semester</option>
                                    <option value="4th Semester">4th Semester</option>
                                    <option value="5th Semester">5th Semester</option>
                                    <option value="6th Semester">6th Semester</option>
                                    <option value="7th Semester">7th Semester</option>
                                    <option value="8th Semester">8th Semester</option>
                                    </select>
                            </div>
                        </div>
                    

                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                    <input style="background:blue;" name="student" type="submit"
                        class="text-white bg-blue-700 cursor-pointer hover:bg-blue-800   font-medium rounded-lg text-sm px-5 py-2.5 text-center" value="Add a new Student"/>
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
      <th scope="col">Eno</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Father's  Number </th>
      <th scope="col">Department</th>
      <th scope="col">Branch</th>
      <th scope="col">Semester</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include 'partials/dbcon.php';
        $sql = mysqli_query($con, "Select * from student");
           while($row = mysqli_fetch_assoc($sql)){
                echo "<tr>";
                echo "<td>".$row['eid']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['number']."</td>";
                echo "<td>".$row['fnumber']."</td>";
                echo "<td>".$row['dept']."</td>";
                echo "<td>".$row['branch']."</td>";
                echo "<td>".$row['sem']."</td>";
                echo "<td><button data-modal-target='popup-modal".$row['eid']."' data-modal-toggle='popup-modal".$row['eid']."' id='deleteContact".$row['eid']."' class='py-1.5 rounded-md text-white px-4 bg-red-500 '>Delete</button></td>";
                echo "</tr>";

                ?>

                    <div id="popup-modal<?php echo $row['eid']; ?>" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal<?php echo $row['eid']; ?>">
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
                                    <a href="partials/studentdelete.php?key=<?php echo $row['eid']; ?>" style="background:rgb(239,68,68);" data-modal-hide="popup-modal<?php echo $row['eid']; ?>" type="button" class="text-white hover:bg-red-500 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Yes, I'm sure
                                    </a>
                                    <button data-modal-hide="popup-modal<?php echo $row['eid']; ?>" type="button" class="text-gray-500 bg-white hover:bg-gray-100  rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 ">No, cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php 


            }
                ?>
            
            
                </tbody>
                </table> 
                </div> 
            </div>
         </div>
    </div> 

    <script src="js/ham.js"> </script>
    <script src="js/jquery.min.js   "
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="js/dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
    
  <script>
    const departmentSelect = document.getElementById('department');
    const branchSelect = document.getElementById('branchs');

    // Define branch options for each department
    const branchOptions = {
      <?php 
      $sql = mysqli_query($con,"select * from dept;");
        while($row = mysqli_fetch_assoc($sql)){
          echo $row['dname']." : ".${$row['dname']}.",";
        }
        ?>
    };

    // Function to update branch options based on selected department
    function updateBranchOptions() {
      const selectedDepartment = departmentSelect.value;
      const branches = branchOptions[selectedDepartment];
      branchSelect.innerHTML = ''; // Clear existing options

      // Populate branch options based on selected department
      branches.forEach(branch => {
        const option = document.createElement('option');
        option.value = branch;
        option.text = branch.toUpperCase();
        branchSelect.appendChild(option);
      });
    }

    // Add event listener to department select input
    departmentSelect.addEventListener('change', updateBranchOptions);

    // Initialize branch options based on default selected department
    updateBranchOptions();
  </script>
</body>
</html>
