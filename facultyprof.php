
                <?php
                   include 'partials/dbcon.php';
                    $id = $_GET['id'];
                    $fid = $_GET['fid'];
                    $sql = mysqli_query($con,"SELECT `did`,`subject`,`from`,`to` FROM `subject` WHERE `subject` IN (SELECT `subject`FROM `faculty_role` WHERE `fid` = '$fid' AND `id` = '$id' AND `subject`.`subject` = `faculty_role`.`subject` );");
                    $day = [];
                    $from = [];
                    $to = [];
                    $sqla = mysqli_query($con,"SELECT * from day");
                    $dname = [];
                    while($data = mysqli_fetch_assoc($sqla)){
                        array_push($dname,$data['dayname']);
                    }
                    while($data = mysqli_fetch_assoc($sql)){
                        array_push($day,$dname[$data['did']-1]);                   
                        array_push($from,$data['from']);                   
                        array_push($to,$data['to']);                   
                    }
                    // $day = json_encode($day);
                    // $from = json_encode($from);
                    // $to = json_encode($to);

                ?>
                            
<div class="">
    <div class="profile flex flex-col w-80 border border-gray-200 rounded-md p-10">
        <div class="items flex flex-col items-center">
            <div class="flex rounded-md mb-5 shadow-sm">
                        <?php
    
                            $id = $_GET['id'];
                            $fid = $_GET['fid']; 
                            $bid = $_GET['bid'];
                            $i=1;
                            $sqll = mysqli_query($con,"select * from faculty where fid = '$fid'");
                            $row2 = mysqli_fetch_assoc($sqll);
                            $fname = $row2['fname'];
                            $fimg = $row2['img'];
                            $femail = $row2['email'];
                            $fnumber = $row2['number'];
                            
                            $sql = mysqli_query($con,"select * from faculty_role where fid = '$fid' AND bid = '$bid';");
                            while($row = mysqli_fetch_assoc($sql)){
                                $bid = $row['bid'];
                                echo '
                                  <a href="facultyprofile.php?bid='.$bid.'&fid='.$fid.'&id='.$row['id'].'" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 ">
                                    Class'.$i.'
                                  </a>
                                ';
                                $i++;
                            }
                            $sqlll = mysqli_query($con,"SELECT `did`, `bname` FROM `branch` WHERE `bid` in (SELECT `bid` FROM `faculty_role` WHERE `bid` = '$bid');");
                                        while($www = mysqli_fetch_assoc($sqlll)){
                                            $branches = $www['bname'];
                                            $departmentId = $www['did'];
                                        }
    
                                        $sqlll = mysqli_query($con,"SELECT `dname` FROM `dept` WHERE `did` IN (SELECT `did`FROM `branch`WHERE `did` = '$departmentId' );");
                                        while($www2 = mysqli_fetch_assoc($sqlll)){
                                            $department = $www2['dname'];
                                        }
    
                        ?>
                            </div>
                  <img src="facultyimg/<?php echo $fimg; ?>" class="rounded-md border border-gray-200 mb-3" width="150px" alt="">
            <p class="text-lg text-center   "><?php echo $fname; ?></p>
            <?php
                $sql = mysqli_query($con,"select subject,sem from faculty_role where id = '$id';");
                while($row=mysqli_fetch_assoc($sql)){
                    $subject = $row['subject'];
                    $sem = $row['sem'];
            
                    
                    
                    echo '
                    <div class="section w-full my-4 flex justify-around">
                        <div class="text-center">
                        <p class="text-xs">Subject</p>
                            <p class="text-sm">'.ucfirst($subject).'</p>
                        </div>
                        <div class="text-center">
                        <p class="text-xs">Semester</p>
                            <p class="text-sm">'.ucfirst($sem).'</p>
                        </div>
                    </div>
                    <div class="section w-full my-4 flex justify-around">
                        <div class="text-center">
                        <p class="text-xs">Branch</p>
                            <p class="text-sm">'.ucfirst($branches).'</p>
                        </div>
                        <div class="text-center">
                        <p class="text-xs">Department</p>
                            <p class="text-sm">'.ucfirst($department).'</p>
                        </div>
                    </div>
                    ';
                    
                }
            ?>
     </div>
          
        <div class="list">
            <ul class="">
                <a href="#" class=" text-gray-500 hover:text-gray-800 active:text-gray-800">
                    <li class="my-2 flex cursor-pointer items-center"> <i class="w-5 fa-brands fa-slack mr-3"></i>
                        <p>Overview</p>
                    </li>
                </a>
                <a href="#" class=" text-gray-500 hover:text-gray-800 active:text-gray-800">
                    <li class="my-2 flex cursor-pointer items-center"> <i class="w-5 fa-solid fa-school mr-3"></i>
                        <p>Students</p>
                    </li>
                </a>
                <a href="#" class=" text-gray-500 hover:text-gray-800 active:text-gray-800">
                    <li class="my-2 flex cursor-pointer items-center"><i
                            class="w-5 fa-solid fa-person-circle-plus mr-3"></i>
                        <p>Attandance</p>
                    </li>
                </a>
                <a href="#" class=" text-gray-500 hover:text-gray-800 active:text-gray-800">
                    <li class="my-2 flex cursor-pointer items-center"> <i class="w-5 fa-solid fa-gear mr-3"></i>
                        <p>Settings</p>
                    </li>
                </a>
            </ul>
        </div>
    </div>

    
</div>