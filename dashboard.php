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
            <div class="content w-full h-[86.5vh] ov overflow-y-auto bg-white rounded-l-lg">
                <div class="con w-full  ">


                        <div class="flex p-6 flex-wrap">
                            
                            <?php 
                                include 'partials/dbcon.php';
                                $sql = mysqli_query($con,"select * from dept");
                                while($row = mysqli_fetch_assoc($sql)){
                                    $dept = ucfirst($row['dname']);
                                    $did = $row['did'];
                                    ?>                     
                                <div class="max-w-sm mr-4 mb-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    
                                    <div class="p-5">
                                        <a href="branches.php?branch=<?php echo $did; ?>">
                                            <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $dept; ?></h5>
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


