<?php
    $name = $_POST['Name'];
    $visitor_email = $_POST['Email'];
    $Message = $_POST['Message'];

    $email_from = 'nixonjosephb@gmail.com';
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name.\n"
                
?>