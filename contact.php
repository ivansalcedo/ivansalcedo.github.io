<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['contact-name'];
        $email = $_POST['contact-email'];
        $message = $_POST['contact-message'];
        $from = "From: " . $email . "\r\n";
        
        mail("ivan.salcedo@gmail.com","message from github.io",$message, $from);
    }  else {
        echo "Solo por post " . $_GET['contact-name'];
    }

?>