<?php
  session_start();
  $_SESSION['useremail'];
  echo $_SESSION['useremail'];
  // $co=mysqli_connect('localhost','root','');

  // //mysqli_select_db($co, 'studentdatabase');


  // $result = mysqli_query($co, $s);

  // $num = mysqli_num_rows($result);

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashbboard</title>
    <meta name="author" content="IIIT Manipur">
    <meta name="description" content="">
    <link rel="stylesheet" href="./css/styles.dashboard.css">
    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <!-- <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style> -->
</head>
<body class="bg-gray-100 flex">

    <aside class="relative bg-blue-800 lg:w-1/5 md:-1/3 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.html" class="text-blue-100 sm:text-2xl text-xl font-medium hover:text-gray-300 tracking-wide" style="font-family: 'Lato';">Student</a>
            <!-- <p class="leading-relaxed text-gray-500 font-normal">Student</p> -->
            <a href="payment.html"><button class="bg-white inline-flex cta-btn sm:text-sm lg:text-base text-base font-semibold py-2 px-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 focus:outline-none flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i>New Registration
            </button></a>
        </div>
        <nav class=" text-white bg-blue-800 text-base font-semibold pt-4">
            <a href="Student_dashboard.html" class="flex items-center active-nav-link text-white bg-blue-900 py-5 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="payment.html" class="flex items-center text-white opacity-75 hover:opacity-100 hover:bg-blue-900 py-5 pl-6 nav-item">
                <i class="fas fa-credit-card mr-3"></i>
                Payment Form
            </a>
            <a href="course.php" class="flex items-center text-white opacity-75 hover:opacity-100 hover:bg-blue-900 py-5 pl-6 nav-item" >
                <i class="fas fa-book mr-3"></i>
                Course Registration
            </a>
        </nav>
        <a href="#" class="tooltip absolute w-full bottom-0 flex fixed items-center justify-center text-white bg-blue-900 py-3 nav-item">
            <i class="fas fa-info-circle mr-3" aria-hidden="true"></i>
            Need help
            <span class="tooltiptext">For queries regarding payment and course registration please contact the academic section.</span>
        </a>
    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full flex items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-2 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#2a4365"><path d="M86,14.33333c-39.5815,0 -71.66667,32.08517 -71.66667,71.66667c0,39.5815 32.08517,71.66667 71.66667,71.66667c39.5815,0 71.66667,-32.08517 71.66667,-71.66667c0,-39.5815 -32.08517,-71.66667 -71.66667,-71.66667zM86,34.04167c12.86417,0 23.29167,10.4275 23.29167,23.29167c0,12.86417 -10.4275,23.29167 -23.29167,23.29167c-12.86417,0 -23.29167,-10.4275 -23.29167,-23.29167c0,-12.86417 10.4275,-23.29167 23.29167,-23.29167zM86,143.33333c-17.47233,0 -33.11717,-7.81883 -43.63067,-20.15267c-2.7305,-3.2035 -2.12133,-8.01233 1.23983,-10.54217c10.87183,-8.17717 30.6805,-12.30517 42.39083,-12.30517c11.71033,0 31.519,4.128 42.398,12.30517c3.36117,2.52983 3.97033,7.34583 1.23983,10.54217c-10.52067,12.33383 -26.1655,20.15267 -43.63783,20.15267z"></path></g></g></svg></button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white hover:bg-blue-700">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white hover:bg-blue-700">Support</a>
                    <a href="index.html" class="block px-4 py-2 account-link hover:text-white hover:bg-blue-700">Sign Out</a>
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-blue-800 py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-blue-100 sm:text-2xl text-xl font-medium hover:text-gray-300 tracking-wide" style="font-family: 'Lato';">Student
                <!-- <p class="leading-relaxed text-sm text-gray-500 font-normal">Student</p> -->
                </a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>

            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4 ">
                <a href="Student_dashboard.html" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="Payment.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-credit-card mr-3"></i>
                    Payment details
                </a>
                <a href="course.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-book mr-3"></i>
                    Course Registration
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-cogs mr-3"></i>
                    Support
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    My Account
                </a>
                <a href="index.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>
                <button class="w-full bg-white cta-btn font-semibold text-base py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                    <i class="fas fa-plus mr-3"></i>New Registration
                </button>
                <button class="w-full bg-white cta-btn font-semibold py-2 mt-3 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                    <i class="fas fa-info-circle mr-3"></i>Need help
                </button>

            </nav>

        </header>

        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6 mb-8">
                <h1 class="sm:text-3xl text-2xl text-black font-semibold mb-3">Dashboard</h1>
                <div class="leading-relaxed text-gray-600">Check your payment, faculty advisor and academic verification <span class="text-blue-500">status</span> here.</div>

            </main>
            <section class="text-gray-700 body-font">
                <div class="container px-5 mx-auto flex flex-wrap">
                  <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
                    <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                      <div class="h-full w-1 bg-gray-400 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">1
                        <!-- <i class="fa fa-check" aria-hidden="true"></i> -->
                    </div>
                    <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                      <div class="flex-shrink-0 w-24 h-24 bg-blue-100 shadow-md text-blue-600 rounded-full inline-flex items-center justify-center">
                        <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg> -->
                        <i class="fa fa-credit-card text-3xl" aria-hidden="true"></i>
                      </div>
                      <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Payment Verfication<span class="leading-relaxed text-red-600 italic ml-4 font-normal text-base">Pending</span></h2>
                        <!-- <p class="leading-relaxed italic mb-1 text-green-600">Approved</p> -->
                        <p class="leading-relaxed">Your payment details has not been verified by the finance department of IIIT Manipur.</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                    <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                      <div class="h-full w-1 bg-gray-400 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">2</div>
                    <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                      <div class="flex-shrink-0 w-24 h-24 shadow-md bg-blue-100 text-blue-600 rounded-full inline-flex items-center justify-center">
                        <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                          <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg> -->
                        <i class="fa fa-user text-3xl" aria-hidden="true"></i>

                      </div>
                      <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Faculty Advisor Verification<span class="leading-relaxed text-red-600 italic ml-4 font-normal text-base">Pending</span></h2>
                        <p class="leading-relaxed">Verfication of the courses opted by the student from the current semester faculty advisor.</p>
                      </div>
                    </div>
                  </div>
                  <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                    <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                      <div class="h-full w-1 bg-gray-400 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">3</div>
                    <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                      <div class="flex-shrink-0 w-24 h-24 shadow-md bg-blue-100 text-blue-600 rounded-full inline-flex items-center justify-center">
                        <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                          <circle cx="12" cy="5" r="3"></circle>
                          <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                        </svg> -->
                        <i class="fa fa-credit-card text-3xl" aria-hidden="true"></i>

                      </div>
                      <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Academic Verification<span class="leading-relaxed text-red-600 italic ml-4 font-normal text-base">Pending</span></h2>
                        <p class="leading-relaxed">Final verification by the academic section for successful registration of upcoming semester.</p>
                      </div>
                    </div>
                  </div>

                </div>
              </section>
        </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

    <script>

    </script>


</body>
</html>
