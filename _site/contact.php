<?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
      
    }  else {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $message = $_GET['message'];
        echo "Solo por post mi estimado " . $_GET['name'];
    }

    $from = "From: " . $email . "\r\n";        
    mail("ivan.salcedo@gmail.com","message from github.io",$message, $from);

    //$data = [ 'status' => 'OK'];
    header("Access-Control-Allow-Origin: *");
    //header('Content-type: application/json');
    echo "success"; //json_encode( $data );

?>
