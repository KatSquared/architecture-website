<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_tel = $_POST['tel'];
    $message = $_POST['message'];


    $email_from = 'kontakt@violet-arch.pl';

    $email_subject = "Nowe zapytanie";
    
    $email_body =   "Imię i nazwisko: $name.\n".
                    "Adres e-mail: $visitor_email.\n".
                    "Numer telefonu: $visitor_tel.\n".
                    "User Message: $message.\n";


    $to = "wioletta.kmita@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");


?>