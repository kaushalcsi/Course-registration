<?php
  session_start();

  $conn=mysqli_connect('localhost','root','');

  mysqli_select_db($conn, 'email_otp');

  $Username=$_POST['user_name'];
  $Password=$_POST['pass_word'];

  $s="select *from accounts where Email='$Username' && Password='$Password'";

  $result = mysqli_query($conn, $s);

  $num = mysqli_num_rows($result);

  if($num==1)
  {
    header('location:Student_dashboard.html');
  }
  else
  {
    header('location:index.html');
  }
  mysqli_close($conn);
?>
