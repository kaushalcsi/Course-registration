<?php
  session_start();

  $connn=mysqli_connect('localhost','root','');

  mysqli_select_db($connn, 'studentdatabase');

  $roll="SELECT RollNumber from studentpaymentdetails";

  $result=mysqli_query($connn, $roll);

  $s=$_POST['statussubmit'];

  $i=0;

  while($r=mysqli_fetch_assoc($result))
    {
        $check=$r['RollNumber'];

  if($s[$i]=='Accept')
  {
    $st="UPDATE studentpaymentdetails SET Status=1 where RollNumber='$check'";
    mysqli_query($connn, $st);
  }
  else {
    $st="UPDATE studentpaymentdetails SET Status=0 where RollNumber='$check'";
    mysqli_query($connn, $st);
  }
  $i=$i+1;
}
  mysqli_close($connn);
  header('location:finance_dashboard.php?message=Changes Saved');
?>
