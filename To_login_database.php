<?php
  session_start();

  $conn=mysqli_connect('localhost','root','');

  mysqli_select_db($conn, 'email_otp');

  $Username=$_POST['user_name'];
  $Password=$_POST['pass_word'];
  $fin=0;
  $acad=0;

  $s="select *from accounts where Email='$Username' && Password='$Password'";
  // $finance="SELECT `Email` FROM `accounts` WHERE Email='finance@iiitmanipur.ac.in'";
  // $financepass="SELECT `Password` FROM `accounts` WHERE Password='finance123'";
  
  $result = mysqli_query($conn, $s);
  $num = mysqli_num_rows($result);

  // $resultfin = mysqli_query($conn, $finance);
  // $fin = mysqli_num_rows($resultfin);
 
  if($Username='finance@iiitmanipur.ac.in' && $Password=='finance123')
  {
    $fin=1;
  }

  if($Username='academic@iiitmanipur.ac.in' && $Password=='academic123')
  {
    $acad=1;
  }
  if($num==1 && $fin==0&&$acad==0)
  {
    // session_start();

          //echo 'Welcome to page #1';
    header('location:Student_dashboard.php');
  }
  elseif($fin==1)
  {
        header('location:finance_dashboard.php');

  }
  elseif($acad==1){
    header('location:academic_dashboard.php');

  }
  else
  {
    header('location:index.html');
  }
  mysqli_close($conn);
?>
