<?php
session_start();

  $i=0;
  if(isset($_POST['email'])==true && empty($_POST['email'])==false)
  {
      $email=$_POST['email'];
     if(filter_var($email, FILTER_VALIDATE_EMAIL)==true)
      {
        //connect database
        $econ=mysqli_connect('localhost','root','');

        mysqli_select_db($econ, 'email_otp');

        //checking weather the user is already registered or not
        $s="SELECT Email from accounts";
        $result = mysqli_query($econ, $s);
        while($r=mysqli_fetch_assoc($result))
          {
          if($email==$r['Email'])
            {

              $i=1;
            }
          }
        if($i==1)
        {
          echo "you are already registered";
        }
        else if($i==0)
        {

        //generating pass_word
        $vkey=md5(time().$email);


        //insert info in SQLiteDatabase
          $insert="INSERT INTO accounts(Email, Password) VALUES ('$email', '$vkey')";
          mysqli_query($econ, $insert);
          if($insert)
          {
            $to=$email;
            $subject="Email Verification";
            $message="Your Password is:".$vkey;
            $header="From: limberphoenix@gmail.com \r\n";
            $header .="MIME-Version: 1.0" . "\r\n";
            $header .="Content-type:text/html;charset=UTF-8" . "\r\n";

            mail($to,$subject,$message,$header);
            // header('location:addEmail.php');

            header('location:index.html');
          }
        }
      }
      else {
        echo "Not a valid Email address!!";
      }
  }

 


 ?>
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
  <header class="text-gray-900 body-font bg-blue-200">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-100 mb-4 md:mb-0">
          <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full" viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg> -->
          <img src="./img/iiitm-logo.png" class="w-16" alt="IIIT Manipur logo">
          <span class="ml-3 text-xl text-gray-900">IIIT Manipur</span>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">

        </nav>
        <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Feedback?
          <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg> -->
        </button>
      </div>
 <section class="text-gray-700 body-font">
     <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
       <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
         <h1 class="title-font font-medium text-3xl text-gray-900">Welcome to the IIIT Manipur Course registration portal</h1>
         <p class="leading-relaxed mt-4">Enter your college email address to generate your password to your email.</p>
 <form action="" method="post">
 <h2 class="text-gray-900 text-lg font-medium title-font mb-6">Sign up to portal</h2>

 <input class="form__input bg-white rounded border w-1/2 border-gray-400 focus:outline-none focus:border-blue-500 text-base px-4 py-2 mt-3" placeholder="email" name="email" pattern="[a-z0-9._%+-]+@iiitmanipur.ac.in$" type="text">
 <label for="email" class="form__label ml-4 text-xs">Email <address></address></label>

 <button id="login" class="btn-signup text-white bg-blue-500 w-1/8 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg mb-6 mt-4">Send password to email</button>

 </form>

</section>

</body>
</html>
