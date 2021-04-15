<?php
session_start();

$c=mysqli_connect('localhost','root','');

mysqli_select_db($c, 'studentdatabase');

$firstname=$_POST['fname'];
$middlename=$_POST['mname'];
$lastname=$_POST['lname'];
$rollno=$_POST['roll'];
$programme=$_POST['program'];
$department=$_POST['departmentsubmit'];
$semester=$_POST['sem'];
$category=$_POST['categorysubmit'];
$disable=$_POST['radio'];
$paymentmode=$_POST['paymentsubmit'];
$dop=$_POST['date'];
$paymentno=$_POST['paymentnumber'];

$s="select *from studentpaymentdetails where RollNumber='$rollno'";

$result = mysqli_query($c, $s);

$num = mysqli_num_rows($result);

$_SESSION['ROLL']=$rollno;


if($num==1)
  {
    echo "You are already Registered\n";
    $Status="SELECT Status from studentpaymentdetails where RollNumber='$rollno'";

    $re=mysqli_query($c, $Status);
    $r=mysqli_fetch_assoc($re);


    $transfer=$r['Status'];
    if($transfer==1)
    {
      header('location:course.php');

    }
    else {
      echo "Your payment status is still pending";
    }
  }
else
{
    $details="INSERT INTO studentpaymentdetails(Firstname, Middlename, Lastname, RollNumber, Programme, Department, Semester, Category, Disability, Modeofpayment, Dateofpayment, Referenceno, Status) VALUES ('$firstname','$middlename','$lastname','$rollno','$programme','$department','$semester','$category','$disable','$paymentmode','$dop','$paymentno',' ')";
    mysqli_query($c, $details);
    echo "You are Registered but not verified from the finance";

}


mysqli_close($c);



  ?>
