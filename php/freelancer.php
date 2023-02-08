<?php 
if(isset($_POST['submit'])){
    $to = "erimalisha7@gmail.com";
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Contact card from Erick";
    $subject2 = "Erick's contact card";
    $message = "Please add ". $from . " to Erick's contact card:";
    $message2 = "Your submission has been received sucessfully";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Thank you for contacting Erick";
    header('Location: ../freelancer.html'); 
}
?>