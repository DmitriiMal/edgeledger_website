<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "d.w.malyschkin@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Form Submission", $name, $phone, "From:" . $email);
    
    header('Location: http://malyshkin.net/success.html');
  }