<?php
    if(!isset($_POST['submit']))
    {
        echo"error; you need to submit the form";
    }
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    if(empty($name)||empty($visitor_email))
    {
        echo "Name and email are mandatory !";
        exit;
    }
    $email_from = 'leohilaire.contact@gmail.com';
    $email_subject = "Nouveau formulaire";
    $email_body = "Coucou $message";
    $to = 'leohilaire.contact@gmail.com';
    $headers = "De : $email_from \r\n";

    mail($to,$email_subject,$email_body,$headers);
?>