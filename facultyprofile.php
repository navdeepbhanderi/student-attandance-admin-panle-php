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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
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
        <div class="part1 w-full"><?php  include 'partials/sidebar.php'; ?>
            <div class="content w-full h-[86.5vh]  overflow-y-auto bg-white rounded-l-lg">
                <div class="con flex w-full h-full  p-6">
                    <div class="part-1 h-full">
                       <?php
                            include 'facultyprof.php'; 
                        ?>
                    </div>
                    <div class="part-2 flex h-full">
                        <div class="lectures mx-4">

                            <div class="relative mb-4 overflow-x-auto shadow-md sm:rounded-lg">
                            <table  class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                    <tr class="border-b border-gray-200">
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            Day
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Day Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            From
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            To
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php

                                    // print subject time 

                                    $j = 1;
                                    for($i = 0; $i<5;$i++){                  
                                    echo '
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">'.$j.'</th>
                                            <td class="px-6 py-4 flex items-center">
                                                '.$day[$i].'';
                                                date_default_timezone_set('Asia/Kolkata');
                                                
                                                if($day[$i] == date('l') && $from[$i]<= date('H:i') && $to[$i]>date('H:i')){
                                                    echo '<span class="ml-2 relative flex h-3 w-3">
                                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-600 opacity-75"></span>
                                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-red-600"></span>
                                                  </span>';
                                                }
                                                else{
                                                    if($day[$i] == date('l') && $to[$i]<date('H:i')){
                                                    echo '<span class="ml-2 relative flex h-3 w-3">
                                                    
                                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-gray-600"></span>
                                                  </span>';
                                                    }
                                                }
                                                
                                           echo '</td>
                                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                            '.$from[$i].' 
                                            </td>
                                            <td class="px-6 py-4">
                                            '.$to[$i].'
                                            </td>
                                            </tr>';
                                            $j++;
                                    }
                                ?>
                
            
           
           
                                    </tbody>
                            </table>
                            </div> 

                            <div class="schedule border p-5  mt-5 px-10 border-gray-200 w-fit rounded-lg ">
                                <p class="mb-1 font-semibold">Schedule</p>
                                <p class="text-xs font-semibold mb-4 text-gray-400"><?php echo date('l'); ?>'s Lecture</p>

                               
<?php
    $arr = array(1=>"Monday",2=>"Tuesday",3=>"Wednesday",4=>"Thursday",5=>"Friday",6=>"Saturday",7=>"Sunday");
    $index = array_search(date('l'),$arr); 
    $sql = mysqli_query($con,"select * from subject where did = '$index'");
    $subject = [];
    $from = [];
    $to = [];
    while($row = mysqli_fetch_assoc($sql)){
        array_push($subject,$row['subject']);                   
        array_push($from,$row['from']);                   
        // array_push($to,$row['to']); 
    }
    // print_r($subject);
    // print_r($from);
    // print_r($to);
?>
                                <div class="div w-full h-full relative before:absolute before:contents-none before:<?php  
                                $days = date('l');
                                if($days == "Saturday" || $days == "Sunday"){
                                }else{
                                    echo "h-72";
                                }
                                
                                ?> before:left-[3.61rem] before:w-1 before:top-1 before:bg-gray-100">
                                    <?php 
                                        $color = array("blue","yellow","green","red","purple","green","blue","red");
                                        $i = 0;
                                        
                                        
                                        if($days == "Saturday" || $days == "Sunday"){
                                            $i=1; 
                                        }
                                        else{
                                            $i = 8;
                                        }
                                        $j=0;
                                        while($j<$i){
                                            if($j == $i){
                                                break;
                                            }
                                            echo '<div class="row flex items-center mb-4">
                                            <div class="time w-10 mr-[11.5px]  text-sm">'.$from[$j].'</div>
                                            <div class="div w-[2px] h-[2px] border-[3.5px] z-10 bg-white rounded-full border-'.$color[$j].'-500 p-[5px]">
                                            </div>
                                            <div class="ml-3 l-name">'.ucfirst($subject[$j]).'</div>
                                        </div>';  

                                            $j++;

                                        }
                                       
                                    ?>
                                      
                                </div>
                            </div>  
                        </div>
                        <div class="overview">         
                            <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                            <div class="flex justify-between mb-3">
                                <div class="flex items-center">
                                <div class="flex justify-center items-center">
                                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white pr-1">Your classroom's progress</h5>
                                    <svg data-popover-target="chart-info" data-popover-placement="bottom" class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white cursor-pointer ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z"/>
                                    </svg>
                                    <div data-popover id="chart-info" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth - Incremental</h3>
                                            <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                                            <h3 class="font-semibold text-gray-900 dark:text-white">Calculation</h3>
                                            <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
                                            <a href="#" class="flex items-center font-medium text-blue-600 dark:text-blue-500 dark:hover:text-blue-600 hover:text-blue-700 hover:underline">Read more <svg class="w-2 h-2 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg></a>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="bg-gray-50 dark:bg-gray-700 p-3 rounded-lg">
                                <div class="grid grid-cols-3 gap-3 mb-2">
                                <dl class="bg-orange-50 dark:bg-gray-600 rounded-lg flex flex-col items-center justify-center h-[78px]">
                                    <dt class="w-8 h-8 rounded-full bg-orange-100 dark:bg-gray-500 text-orange-600 dark:text-orange-300 text-sm font-medium flex items-center justify-center mb-1">10</dt>
                                    <dd class="text-orange-600 dark:text-orange-300 text-xs  font-medium">Total students</dd>
                                </dl>
                                <dl class="bg-teal-50 dark:bg-gray-600 rounded-lg flex flex-col items-center justify-center h-[78px]">
                                    <dt class="w-8 h-8 rounded-full bg-teal-100 dark:bg-gray-500 text-teal-600 dark:text-teal-300 text-sm font-medium flex items-center justify-center mb-1">9</dt>
                                    <dd class="text-teal-600 dark:text-teal-300 text-xs font-medium">Student request</dd>
                                </dl>
                                <dl class="bg-blue-50 dark:bg-gray-600 rounded-lg flex flex-col items-center justify-center h-[78px]">
                                    <dt class="w-8 h-8 rounded-full bg-blue-100 dark:bg-gray-500 text-blue-600 dark:text-blue-300 text-sm font-medium flex items-center justify-center mb-1">64</dt>
                                    <dd class="text-blue-600 text-center dark:text-blue-300 text-xs font-medium">Overall Attandance</dd>
                                </dl>
                                </div>
                                <button data-collapse-toggle="more-details" type="button" class="hover:underline text-xs text-gray-500 dark:text-gray-400 font-medium inline-flex items-center">Show more details <svg class="w-2 h-2 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                                </button>
                                <div id="more-details" class="border-gray-200 border-t dark:border-gray-600 pt-3 mt-3 space-y-2 hidden">
                                <dl class="flex items-center justify-between">
                                    <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal">Average task completion rate:</dt>
                                    <dd class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
                                    <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                                    </svg> 57%
                                    </dd>
                                </dl>
                                <dl class="flex items-center justify-between">
                                    <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal">Days until sprint ends:</dt>
                                    <dd class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-gray-600 dark:text-gray-300">13 days</dd>
                                </dl>
                                <dl class="flex items-center justify-between">
                                    <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal">Next meeting:</dt>
                                    <dd class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-gray-600 dark:text-gray-300">Thursday</dd>
                                </dl>
                                </div>
                            </div>

                            <!-- Radial Chart -->
                            <div class="py-6" id="radial-chart"></div>

                            <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                                <div class="flex justify-between items-center pt-5">
                                <!-- Button -->
                                <button
                                    id="dropdownDefaultButton"
                                    data-dropdown-toggle="lastDaysdropdown"
                                    data-dropdown-placement="bottom"
                                    class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                                    type="button">
                                    Last 7 days
                                    <svg class="w-2.5 m-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                                <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                                        </li>
                                        <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                        </li>
                                        <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                                        </li>
                                        <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                                        </li>
                                        <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                                        </li>
                                    </ul>
                                </div>
                                <a
                                    href="#"
                                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                                    Progress report
                                    <svg class="w-2.5 h-2.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>        
    </div>

   
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script src="https://kit.fontawesome.com/56705d3fd7.js" crossorigin="anonymous"></script>
    <script src="js/ham.js"> </script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
  // ApexCharts options and config
  window.addEventListener("load", function() {
    const getChartOptions = () => {
        return {
          series: [90, 85, 70],
          colors: ["#1C64F2", "#16BDCA", "#FDBA8C"],
          chart: {
            height: "380px",
            width: "100%",
            type: "radialBar",
            sparkline: {
              enabled: true,
            },
          },
          plotOptions: {
            radialBar: {
              track: {
                background: '#E5E7EB',
              },
              dataLabels: {
                show: false,
              },
              hollow: {
                margin: 0,
                size: "32%",
              }
            },
          },
          grid: {
            show: false,
            strokeDashArray: 4,
            padding: {
              left: 2,
              right: 2,
              top: -23,
              bottom: -20,
            },
          },
          labels: ["Done", "In progress", "To do"],
          legend: {
            show: true,
            position: "bottom",
            fontFamily: "Inter, sans-serif",
          },
          tooltip: {
            enabled: true,
            x: {
              show: false,
            },
          },
          yaxis: {
            show: false,
            labels: {
              formatter: function (value) {
                return value + '%';
              }
            }
          }
        }
      }
      
      if (document.getElementById("radial-chart") && typeof ApexCharts !== 'undefined') {
        var chart = new ApexCharts(document.querySelector("#radial-chart"), getChartOptions());
        chart.render();
      }
  });
</script>
</body>
</html>


