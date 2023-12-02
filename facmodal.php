<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>


<body>

    <!-- Modal toggle -->
    <button type=" button" data-modal-target="staticModal" data-modal-toggle="staticModal"
        class="mb-4 p-3 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-md text-white cursor-pointer">Add new
        student</button>

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

                    <form action="partials/handlestudent.php" method="post">
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
                                    maxlength="10" placeholder="Phone number" name="eno" required>
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
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Upload file</label>
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG,
                                    JPG or GIF (MAX. 800x400px).</p>
                            </div>
                        </div>



                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                    <input style="background:blue;" name="faculty" type="submit"
                        class="text-white bg-blue-700 cursor-pointer hover:bg-blue-800   font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        value="Add a new Faculty" />
                    </form>

                    <button data-modal-hide="staticModal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
            </div>
        </div>
    </div>



















    <!-- Modal toggle -->
    <button type=" button" data-modal-target="staticModal1" data-modal-toggle="staticModal1"
        class="mb-4 p-3 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-md text-white cursor-pointer">Assign a
        role</button>

    <div id="staticModal1" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
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
                        data-modal-hide="staticModal1">
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
                        <div class="mb-6">
                            <div>
                                <label for="dept" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Faculty</label>
                                    <select id="dept" name="sem" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none">
                                    <option selected>Choose a Faculty</option>
                                    <option value="1st Semester">Helll</option>
                                    </select>
                            </div>
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="dept" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Department</label>
                                <select id="dept" name="dept" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none">
                                <option selected>Choose a Department</option>
                                <option value="Degree">Degree</option>
                                <option value="Diploma">Diploma</option>
                                </select>
                            </div>
                            <div>
                                <label for="dept" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Branch</label>
                                    <select id="dept" name="branch" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none">
                                    <option selected>Choose a Branch</option>
                                    <option value="Computer">Computer</option>
                                    <option value="Civil">Civil</option>
                                    <option value="Electrical">Electrical</option>
                                    </select>
                            </div>
                            <div>
                                <label for="dept" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Semester</label>
                                <select id="dept" name="sem" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none">
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
                            <div>
                                <div>
                                    <label for="dept" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Subject</label>
                                    <select id="dept" name="sem" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 outline-none">
                                    <option selected>Choose a Subject</option>
                                    <option value="1st Semester">Maths</option>
                                    <option value="2nd Semester">Data stucture</option>
                                    <option value="3rd Semester">Python</option>
                                    <option value="4th Semester">Java</option>
                                    <option value="5th Semester">C++</option>
                                    <option value="6th Semester">Javascript</option>
                                    <option value="7th Semester">Cyber security</option>
                                    <option value="8th Semester">Data mining</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                       
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                    <input style="background:blue;" name="faculty" type="submit"
                        class="text-white bg-blue-700 cursor-pointer hover:bg-blue-800   font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        value="Add a new Faculty" />
                    </form>

                    <button data-modal-hide="staticModal1" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Main modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>