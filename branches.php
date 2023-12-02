<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/input.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
</head>
<body>
<script src="js/sweetalert.min.js"></script>
    <nav>
        
        <?php 
        error_reporting(0);
        ob_start();  include 'partials/navbar.php'; ?>
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
            <div class="content w-full h-[86.5vh] ov overflow-y-auto bg-white rounded-l-lg">
                <div class="con w-full  ">

                        <div class="px-6 pt-6 ">                            
                                    <nav class="flex" aria-label="Breadcrumb">
                                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                                        <li class="inline-flex items-center">
                                        <a href="dashboard.php" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                            <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                            </svg>

                                            <?php
                                            $departmentId = $_GET['branch'];
                                            $sqlll = mysqli_query($con,"SELECT `dname` FROM `dept` WHERE `did` IN (SELECT `did`FROM `branch`WHERE `did` = '$departmentId' );");
                                            while($www2 = mysqli_fetch_assoc($sqlll)){
                                               echo strtoupper($www2['dname']);
                                            }
                                            ?>

                                           
                                        </a>
                                        </li>
                                        <li>
                                        <div class="flex items-center">
                                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                            </svg>
                                            <a  class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Branch</a>
                                        </div>
                                        </li>
                                       
                                    </ol>
                                    </nav>

                        </div>

                        <div class="flex p-6 flex-wrap">
                               
                            <?php 
                                include 'partials/dbcon.php';
                                $branch = $_GET['branch'];
                                $sql = mysqli_query($con,"select * from branch where `did` = '$branch'");
                                while($row = mysqli_fetch_assoc($sql)){
                                    $bname = ucfirst($row['bname']);
                                    $did = $row['did'];
                                    $bid = $row['bid'];
                                    ?>                     
                                <div class="max-w-sm mr-4 mb-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    
                                    <div class="p-5">
                                        <a href="facultyshow.php?branch=<?php echo $bid; ?>">
                                            <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $bname; ?></h5>
                                        </a>
                                    </div>
                                </div>
                                <?php  
                                    }
                                ?>

                        </div>

                </div>
            </div>
         </div>
        
    </div>

   
    <script src="js/ham.js"> </script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</body>
</html>


