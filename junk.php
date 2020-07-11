<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>
    <title>Course registration portal</title>
</head>
<body>
    <header class="text-gray-900 body-font bg-blue-600">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-100 mb-4 md:mb-0">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg> -->
            <img src="./img/iiitm-logo.png" class="w-16" alt="">
            <span class="ml-3 text-xl">IIIT Manipur</span>
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a href="#" class="mr-5 text-gray-100 hover:text-gray-100">Teachers</a>
            <a href="#" class="mr-5 text-gray-100 hover:text-gray-100">Students</a>
            <a href="#" class="mr-5 text-gray-100 hover:text-gray-100">Courses</a>
            <a href="#" class="mr-5 text-gray-100 hover:text-gray-100">FAQ</a>
          </nav>
          <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Feedback?
            <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg> -->
          </button>
        </div>
      </header>
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
          <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <h1 class="title-font font-medium text-3xl text-gray-900">Welcome to the IIIT Manipur Course registration portal</h1>
            <p class="leading-relaxed mt-4">Add your details to the form to register your courses for the upcoming semester. Note, in case of any backlogs please contact your faculty advisor first.</p>
          </div>
          <div class="lg:w-2/6 md:w-1/2 bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <form action="To_login_database.php" method="post">
            <h2 class="text-gray-900 text-lg font-medium title-font mb-6">Sign in to portal</h2>
            <p class="text-xs text-red-600 alert user-alert">*Please enter correct username</p>
            <input class="form__input bg-white rounded border border-gray-400 focus:outline-none focus:border-blue-500 text-base px-4 py-2 username" placeholder="Username" name="user_name" type="text">
            <label for="name" class="form__label ml-4 text-xs">Username</label>
            <input class="form__input bg-white rounded border border-gray-400 focus:outline-none focus:border-blue-500 text-base px-4 py-2 mt-3" placeholder="Password" name="pass_word" type="password">
            <label for="email" class="form__label ml-4 text-xs">Password <address></address></label>
            <button id="login" class="text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg mb-6 mt-4">Sign In</button>
            </form>
            <p class="text-sm bg-gray-700 text-gray-200 mb-3 p-3 rounded">*Your password will be generated for the first time sign in.</p>
            <p class="text-xs text-red-600 mt-0 msg-alert">*Check your institute mail for password</p>
          </div>
        </div>
      </section>
</body>
</html>
