<?php
// if(isset($_POST['submit'])){
  $fname = $_POST['fname'];
  echo $fname;
  $lname = $_POST['lname'];
  echo $lname;
  $email = $_POST['email'];
  echo $email;
  $inquiry = $_POST['inquiry'];
  echo $inquiry;
  $subject = 'Message from the Website'
  $message =  'First Name: ' . $fname .'\n Last Name: ' . $lname .
  '\n\n Message: \n' . $inquiry;
  $headers = 'From:' . $email;
  mail('egishij@gmail.com',$subject, $message);
  echo '<h1 style="font-size:100px;margin-top:100px;">mail sent</h1>';
// }
 ?>
