<?php
   if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $to = "yusufalp_yy@outlook.com";
      $subject = "New Message from Contact Form";
      $body = "Name : $name: $email$message";
      mail($to,$subject,$body);
      echo "Thank you for your message!";
   }
?>