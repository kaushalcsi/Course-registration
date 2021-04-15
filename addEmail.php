 <?php
  $co=mysqli_connect('localhost','root','');
mysqli_select_db($co, 'email_otp');

// $FetchEmail="SELECT Email FROM accounts ORDER BY ID DESC LIMIT 1";
$records = mysqli_query($co,"SELECT Email FROM accounts ORDER BY ID DESC LIMIT 1"); 
while($data = mysqli_fetch_array($records))
{
  $emailMain=$data['Email'];
  $co2=mysqli_connect('localhost','root','');
  mysqli_select_db($co2, 'studentdatabase');
  mysqli_query($co2,"INSERT INTO studentpaymentdetails(email) VALUES ($emailMain)"); 

}

?>
