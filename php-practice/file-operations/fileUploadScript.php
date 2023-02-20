<?php
   if(isset($_FILES['file'])) {
      $file = $_FILES['file'];
  
      $file_name = $file['name'];
      $file_tmp = $file['tmp_name'];
      $file_size = $file['size'];
      $file_error = $file['error'];

      $file_ext = explode('.', $file_name);
      $file_ext = strtolower(end($file_ext));

      $allowed = array('txt');

      if(in_array($file_ext, $allowed)) {
        if($file_error === 0) {
          $file_name_new = uniqid('', true). '.' . $file_ext;
          $file_destination = 'uploads/' . $file_name_new;

          if(move_uploaded_file($file_tmp, $file_destination)) {
            echo $file_destination;
            echo "<br/><br/>File directory sent to ". $_POST['email'] . "!";

            $to = $_POST['email'];

            $subject = 'File open directory';

            $message = '<h1>Hi! This is the directory to the file uploaded: http://localhost/xampp/FA2-PANGILINAN-PATRICK/uploads/';

            $headers = "From: Patrick Pangilinan";
          }
        }
      }
   }
?>